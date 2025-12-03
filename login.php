<?php
session_start();
require "conexion/conexion.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    if (password_verify($password, $usuario['password'])) {
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['rol'] = $usuario['rol'];

        if ($usuario['rol'] == 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: estudiante.php");
        }
        exit();
    }
}

echo "Datos incorrectos. <a href='index.php'>Volver</a>";
