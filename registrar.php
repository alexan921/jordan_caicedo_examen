<?php
require "conexion/conexion.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios(nombre,email,password,rol) VALUES ('$nombre','$email','$password','$rol')";
$conexion->query($sql);

echo "Registrado. <a href='index.php'>Iniciar sesión</a>";