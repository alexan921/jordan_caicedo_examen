<?php
session_start();
if ($_SESSION['rol'] != 1) die("Acceso denegado");
require "conexion/conexion.php";

$documento = $_POST['documento'];
$id_asignatura = $_POST['id_asignatura'];
$nota = floatval($_POST['nota']);

if ($nota < 1 || $nota > 5) {
    die("La nota debe estar entre 1.0 y 5.0");
}

$sql = "INSERT INTO notas (nota, documento, id_asignatura) 
        VALUES ($nota, '$documento', '$id_asignatura')";
        
$conexion->query($sql);

header("Location: admin.php");
?>
