<?php
session_start();
require "conexion/conexion.php";
$id = $_SESSION['id'];

$sql = "SELECT * FROM notas WHERE estudiante_id=$id";
$res = $conexion->query($sql);

echo "<h2>Mis Super Notas</h2>";
echo "<a href='logout.php'>Cerrar sesión</a><br><br>";

while ($fila = $res->fetch_assoc()) {
    echo "Materia: {$fila['materia']} - Nota: {$fila['nota']}<br>";
}