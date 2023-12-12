<?php
$NumeroDeIdentificacion = $_POST['NumeroDeIdentificacion'];
$CContracena = $_POST['contracena'];

session_start();
$_SESSION['NumeroDeIdentificacion'] = $NumeroDeIdentificacion;
include("conexion.php");

// Consulta para obtener el hash almacenado
$consulta = "SELECT contracena FROM usuarios WHERE NumeroDeIdentificacion = '$NumeroDeIdentificacion'";
$resultado = mysqli_query($conex, $consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    $hash_almacenado = $fila['contracena'];

    // Verificar si la contraseña coincide con el hash almacenado
    if (password_verify($CContracena, $hash_almacenado)) {
        // Contraseña válida
        include("./PAGINAINICIAL/HOME.html");
        echo "<script src='sweetAlertDD.js'></script>";
    } else {
        // Contraseña inválida
        include("index.html");
        echo "<script src='sweetAlert.js'></script>";
    }
} else {
    // Usuario no encontrado
    include("index.html");
    echo "<script src='sweetAlert.js'></script>";
}

mysqli_free_result($resultado);
mysqli_close($conex);

  ?>




  