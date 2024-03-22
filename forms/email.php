<?php

$pais = $_POST['pais'];
$nombre = $_POST['name'];
$email = $_POST['email'];
$cel = $_POST['phone'];
$comentarios = $_POST['comentarios'];


$mensaje = "Este mesaje fue enviado por:" . $nombre . ",\r\n";
$mensaje = "Su email es:" . $email . ",\r\n";
$mensaje = "Este mesaje fue enviado por:" . $cel . ",\r\n";
$mensaje = "Este mesaje fue enviado por:" . $pais . ",\r\n";
$mensaje = "Este mesaje fue enviado por:" . $comentarios . ",\r\n";

$para = 'junior090699@gmail.com';
Asunto = 'Email enviado desde Eliashomesolutions.com'

mail($para, $asunto, utf_code($mensaje, $header));
header('Location.ingles.html');

?>

