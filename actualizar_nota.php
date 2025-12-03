<?php
require "conexion/conexion.php";

$id = $_POST['id'];
$materia = $_POST['materia'];
$nota = $_POST['nota'];

$sql = "UPDATE notas SET materia='$materia', nota='$nota' WHERE id=$id";
$conexion->query($sql);
header("Location: admin.php");