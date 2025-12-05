<?php
require "conexion/conexion.php";

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$rol = 2;

$sql = "INSERT INTO usuarios (documento, nombre, email, password, id_rol) 
        VALUES ('$documento', '$nombre', '$email', '$pass', '$rol')";

if ($conexion->query($sql)) {
    echo "Registrado con éxito. <a href='index.php'>Iniciar sesión</a>";
} else {
    echo "Error: " . $conexion->error;
}
?>
