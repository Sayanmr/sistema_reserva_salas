<?php

if (!empty($_POST['btnregistrar'])){
if (!empty($_POST['nombre']) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["contraseña"])) {;

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = $conexion ->query("INSERT INTO usuario (nombre, apellido, correo, contraseña)
VALUES('$nombre','$apellido','$correo','$contraseña')");
if($sql==1) {
    header("location:login.php");
} else{
    echo '<div class="alert alert=danger">Error al registrar persona</div>';
}
}else{
    echo '<div class="alert alert=warning">Complete todos los campos</div>';
}
}
?>