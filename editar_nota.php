<?php
session_start();
if ($_SESSION['rol'] != 1) die("Acceso denegado");

require "conexion/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM notas WHERE id_nota='$id'";
$nota = $conexion->query($sql)->fetch_assoc();
?>

<h2>Editar Nota</h2>

<form action="actualizar_nota.php" method="POST">

<input type="hidden" name="id_nota" value="<?php echo $nota['id_nota']; ?>">

Documento:<br>
<input type="number" name="documento" value="<?php echo $nota['documento']; ?>" readonly><br><br>

Asignatura:<br>
<input type="number" name="id_asignatura" value="<?php echo $nota['id_asignatura']; ?>" readonly><br><br>

Nota:<br>
<input type="number" step="0.1" name="nota" min="1" max="5"
value="<?php echo $nota['nota']; ?>" required><br><br>

<button type="submit">Actualizar</button>

</form>
