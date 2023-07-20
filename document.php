if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $destinatario = "tudirecciondecorreo@example.com";
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "Mensaje: " . $mensaje;
    
    // Envío del correo
    if (mail($destinatario, $asunto, $contenido)) {
        echo "¡Gracias por tu mensaje! Pronto nos pondremos en contacto.";
    } else {
        echo "Lo sentimos, ha ocurrido un error al enviar el mensaje.";
    }
}