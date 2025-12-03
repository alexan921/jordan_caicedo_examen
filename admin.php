<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
die("Acceso denegado");
}
require "conexion/conexion.php";
?>


<h2>Panel Administrador</h2>
<a href="logout.php">Cerrar sesión</a>


<h3>Crear Nota</h3>
<form action="crear_nota.php" method="POST">
Estudiante:
<select name="estudiante_id">
<?php
$est = $conexion->query("SELECT id, nombre FROM usuarios WHERE rol='estudiante'");
while ($e = $est->fetch_assoc()) {
echo "<option value='{$e['id']}'>{$e['nombre']}</option>";
}
?>
</select><br>


Materia:
<select name="materia">
<option value="Matemáticas">CRUD</option>
<option value="Español">CSS</option>
<option value="Ciencias">LARAVEL</option>
<option value="Sociales">PHP</option>
<option value="Inglés">FORM</option>
</select><br>


Nota: <input type="number" step="0.01" name="nota"><br>
<button type="submit">Guardar</button>
</form>


<h3>Listado de Notas</h3></h3>
<?php
$sql = "SELECT notas.id, usuarios.nombre, materia, nota FROM notas
JOIN usuarios ON usuarios.id = notas.estudiante_id";
$res = $conexion->query($sql);


while ($fila = $res->fetch_assoc()) {
echo "ID: {$fila['id']} - Estudiante: {$fila['nombre']} - Materia: {$fila['materia']} - Nota: {$fila['nota']} ";
echo " <a href='editar_nota.php?id={$fila['id']}'>Editar</a> ";
echo " <a href='eliminar_nota.php?id={$fila['id']}'>Eliminar</a><br>";
}
?>