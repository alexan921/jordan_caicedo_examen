<?php
require "conexion/conexion.php";

$id = $_POST['estudiante_id'];
$materia = $_POST['materia'];
$nota = $_POST['nota'];

$sql = "INSERT INTO notas(estudiante_id,materia,nota) VALUES ('$id','$materia','$nota')";
$conexion->query($sql);
header("Location: admin.php");