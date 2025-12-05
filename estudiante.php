<?php
session_start();
require "conexion/conexion.php";
echo "<h1>Bienvenido, " . $_SESSION['nombre'] . " tu rol es " . $_SESSION['rol_nombre'] . "</h1>";

$documento = $_SESSION['documento'];

$sql = "SELECT a.asignatura, n.nota FROM notas n JOIN asignaturas a ON n.id_asignatura = a.id_asignatura
        WHERE n.documento='$documento'";

$res = $conexion->query($sql);
?>

<h2>Mis Super notas</h2>
<a href="logout.php">Cerrar sesión</a>

<table border="1">
<tr>
    <th>Asignatura</th>
    <th>Nota</th>
</tr>

<?php
while ($fila = $res->fetch_assoc()) {
    echo "<tr>
            <td>{$fila['asignatura']}</td>
            <td>{$fila['nota']}</td>
          </tr>";
}
?>
</table>
