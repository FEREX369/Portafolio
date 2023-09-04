<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Correo de destino
    $destinatario = "tucorreo@example.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto desde tu sitio web";

    // Contenido del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Cabeceras del correo
    $headers = "From: $nombre <$email>";

    // Envía el correo
    mail($destinatario, $asunto, $contenido, $headers);

    // Redirige de vuelta a la página de inicio o muestra un mensaje de éxito
    header("Location: index.html");
}
?>
