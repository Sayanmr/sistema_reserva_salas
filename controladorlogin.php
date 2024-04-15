<?php

if(!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty ($_POST["password"])) {
        echo '<h1 class="alert alert-danger">Complete los campos</h1>';
    } else {
        $nombre=$_POST["usuario"];
        $contraseña=$_POST["password"];

        $sql=$conexion->query(" select * from usuario where nombre='$nombre' and contraseña='$contraseña'");
        if($datos=$sql->fetch_object()){
            header("location:reserva.php");
        } if (empty($_POST["usuario"]) or empty ($_POST["password"])) {
            echo '<h1 class="alert alert-danger">Complete todos los campos</h1>';
        }
         else {
            echo "<h1 class='alert alert-danger'>Usuario no Existe</h1>";
        }
    }
    
}


?>