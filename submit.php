<?php
// Verificar si se envió el token del CAPTCHA
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];

    // Hacer una solicitud a Google para validar el token
    $secretKey = "6LcVMyYpAAAAAKuFaIGO5Og8RfigcuyRr1xVUcIR";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha);
    $responseKeys = json_decode($response, true);

    // Verificar la respuesta del CAPTCHA
    if (intval($responseKeys["success"]) !== 1) {
        // El CAPTCHA no se validó correctamente, manejar el error
        echo "Por favor, completa el CAPTCHA correctamente.";
    } else {
        // El CAPTCHA se validó correctamente, procesar el formulario
        echo "Formulario enviado correctamente.";
    }
} else {
    // No se envió el token del CAPTCHA, manejar el error
    echo "Por favor, completa el CAPTCHA.";
}
?>
