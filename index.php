<?php session_start(); ?>

<form action="login.php" method="POST">
    <h3>Inicia Sesión</h3>
    Email: <input type="email" name="email"><br>
    <br>
    Contraseña: <input type="password" name="password"><br>
    <br>
    <button type="submit">Entrar</button>
</form>

<a href="registro.php">Registrarse</a>
