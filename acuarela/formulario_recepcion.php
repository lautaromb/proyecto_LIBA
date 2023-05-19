<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombreyapellido"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $destinatario = "danielmaidana19@hotmail.com";
 // $asunto = "Nuevo mensaje desde el formulario de contacto";
 // $cuerpo = "Nombre: " . $nombre . "\nCorreo electrónico: " . $email . "\nMensaje: " . $mensaje;

  //if (
    mail($destinatario, $nombre, $mensaje);/*) {
    echo "Mensaje enviado con éxito.";
  } else {
    echo "Ha ocurrido un error al enviar el mensaje.";*/
  
}
?>
