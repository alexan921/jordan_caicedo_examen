<?php
session_start();
if ($_SESSION['rol'] != 1) die("Acceso denegado");
require "conexion/conexion.php";

$id = $_POST['id_nota'];
$doc = $_POST['documento'];
$asig = $_POST['id_asignatura'];
$nota = floatval($_POST['nota']);

if ($nota < 1 || $nota > 5) {
    die("La nota debe estar entre 1.0 y 5.0");
}

$sql = "UPDATE notas SET nota=$nota, documento='$doc', id_asignatura='$asig' 
        WHERE id_nota='$id'";

$conexion->query($sql);

header("Location: admin.php");
?>