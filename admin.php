<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
    die("Acceso denegado");
}
require "conexion/conexion.php";
?>

<h2>Panel Administrador</h2>
<a href="logout.php">Cerrar sesión</a>

<h3>Crear Nota</h3>

<form method="POST" action="crear_nota.php">

Estudiante:<br>
<select name="documento" required>
<option value="" disabled selected>Seleccione un estudiante</option>
<?php
$est = $conexion->query("SELECT documento, nombre FROM usuarios WHERE id_rol=2");
while ($e = $est->fetch_assoc()) {
    echo "<option value='{$e['documento']}'>{$e['nombre']} - {$e['documento']}</option>";
}
?>
</select><br><br>

Asignatura:<br>
<select name="id_asignatura" required>
<option value="" disabled selected>Seleccione una asignatura</option>
<?php
$mat = $conexion->query("SELECT * FROM asignaturas");
while ($m = $mat->fetch_assoc()) {
    echo "<option value='{$m['id_asignatura']}'>{$m['asignatura']}</option>";
}
?>
</select><br><br>

Nota:<br>
<input type="number" name="nota" step="0.1" min="1" max="5" required><br><br>

<button type="submit">Guardar Nota</button>

</form>

<hr>

<h3>Listado de Notas</h3>

<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Estudiante</th>
    <th>Asignatura</th>
    <th>Nota</th>
    <th>Acciones</th>
</tr>

<?php
$sql = "SELECT n.id_nota, n.nota, u.nombre, a.asignatura 
        FROM notas n 
        JOIN usuarios u ON n.documento = u.documento 
        JOIN asignaturas a ON n.id_asignatura = a.id_asignatura";

$res = $conexion->query($sql);
while ($fila = $res->fetch_assoc()) {
    echo "<tr>
            <td>{$fila['id_nota']}</td>
            <td>{$fila['nombre']}</td>
            <td>{$fila['asignatura']}</td>
            <td>{$fila['nota']}</td>
            <td>
                <a href='editar_nota.php?id={$fila['id_nota']}'>Editar</a> |
                <a href='eliminar_nota.php?id={$fila['id_nota']}'>Eliminar</a>
            </td>
          </tr>";
}
?>
</table>
