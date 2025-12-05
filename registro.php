<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Registro</title></head>
<body>

<h2>Registro</h2>

<form action="registrar.php" method="POST">

    Documento:<br>
    <input type="number" name="documento" required><br><br>

    Nombre:<br>
    <input type="text" name="nombre" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Contraseña:<br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Registrar</button>
</form>

<a href="index.php">Volver</a>

</body>
</html>