<?php
require "conexion/conexion.php";
$id = $_GET['id'];
$sql = "DELETE FROM notas WHERE id=$id";
$conexion->query($sql);
header("Location: admin.php");