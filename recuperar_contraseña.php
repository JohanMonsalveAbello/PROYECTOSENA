<?php
// Establecer conexión a la base de datos (reemplaza estos valores con los tuyos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ghanjadrops";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Obtener el correo electrónico proporcionado por el usuario

    // Consulta SQL para verificar si el correo existe en la tabla de usuarios
    $sql = "SELECT correo FROM usuarios WHERE correo = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El correo existe en la base de datos, proceder con el envío del correo de recuperación
        $token = bin2hex(openssl_random_pseudo_bytes(16));
        $subject = "Recuperación de contraseña";
        $message = " su codigo de verificacion o token es: $token, Para restablecer tu contraseña, haz clic en este enlace: https://127.0.0.1/GHANJADROPS/nueva_contraseña.html?token=$token";
        $headers = "From: ghanjadropselmejorproyecto2023@gmail.com";
        
        mail($email, $subject, $message, $headers);

        // Mostrar alerta de éxito
        include("index.html");
        echo "<script src='sweetAlertDD2.js'></script>";
    } else {
        // Mostrar alerta si el correo no está registrado
        include("index.html");
        echo "<script src='sweetAlert3.js'></script>";
    }
} else {
    // Mostrar alerta si el método no es permitido
    include("index.html");
    echo "<script src='sweetAlert.js'></script>";
}

// Cerrar conexión
$conn->close();
?>
