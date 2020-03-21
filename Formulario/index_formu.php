<?php 
$destino= "alexandro.aa86@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];

$contenido= "nombre: " . $nombre . "\ncorreo: " . $correo . "\ntelefono: " . $telefono . "\nmensaje: " . $mensaje;

mail($destino, "contacto", $contenido);

header("location:index_formulario.html")

 ?>

 