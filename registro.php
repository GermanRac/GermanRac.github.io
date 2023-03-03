<?php

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$fechanacimiento = $_POST['fechanacimiento'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

echo "Los datos recibidos son:<br>";
echo "Nombres: ".$nombres."<br>";
echo "Apellidos: ".$apellidos."<br>";
echo "Dirección: ".$direccion."<br>";
echo "Fecha de nacimiento: ".$fechanacimiento."<br>";
echo "Usuario: ".$usuario."<br>";
echo "Contraseña: ".$contrasena."<br>";

?>