<?php
require "conexion/conexion.php";
$id = $_GET['id'];
$sql = "SELECT * FROM notas WHERE id=$id";
$f = $conexion->query($sql)->fetch_assoc();
?>

<form action="actualizar_nota.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $f['id']; ?>">
    Materia: <input type="text" name="materia" value="<?php echo $f['materia']; ?>"><br>
    Nota: <input type="number" step="0.01" name="nota" value="<?php echo $f['nota']; ?>"><br>
    <button type="submit">Actualizar</button>
</form>