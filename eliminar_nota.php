<?php
session_start();
if ($_SESSION['rol'] != 1) die("Acceso denegado");
require "conexion/conexion.php";

$id = $_GET['id'];
$conexion->query("DELETE FROM notas WHERE id_nota='$id'");
header("Location: admin.php");
?>
