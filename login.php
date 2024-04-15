<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport">
<title>Login</title>
<link rel="stylesheet" href="css/loginstyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de Sesion</h1>
        <?php
        include("conexion.php");
        include("controladorlogin.php");
        ?>
        <form method="post">
            <div class="username">
                <input id="usuario" type="text" class="input" name="usuario">
                <label>Nombre de Usuario</label>
            </div>
            <div class="username">
                <input id="password" type="password" class="input" name="password">
                <label>Contraseña</label>
            </div>
                <div class="recordar">¿Olvidaste tu Contraseña?</div>
                <form>
                    <input type="submit" value="Inicio" name="btningresar">
                  </form>
                <div class="registrarse">
                   Quiero hacer el <a href="register.php">registro</a>
        
            </div>
        </form>


    </div>
</body>
</html>