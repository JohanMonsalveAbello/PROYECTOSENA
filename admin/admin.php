<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ghanjadrops";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "SELECT NumeroDeIdentificacion, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, ID_TPDOC, correo FROM usuarios ORDER BY NumeroDeIdentificacion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $usuarios = array();


    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }


    header('Content-Type: application/json');
    echo json_encode($usuarios);
} else {
    echo "No se encontraron usuarios.";
}
$conn->close();
?>
