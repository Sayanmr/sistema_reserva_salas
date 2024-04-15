<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="css/registerstyle.css">
</head>
<body>
<form method="post">
<h2>Registro</h2>
<?php
    include("conexion.php");
    include("controlador/registrousuarios.php");
?>
<input name="nombre" type="text" class="input" placeholder="Nombre" >
<input name="apellido" type="text" class="input" placeholder="Apellido">
<input name="correo" type="email" class="input" placeholder="Correo">
<input name="contraseña" type="password" class="input" placeholder="Contraseña">
<!--este es un boton-->
<form method="post">
<input type="submit" class="btn" value="Registrarse" name="btnregistrar">
</form>
</form>
</body>
</html>