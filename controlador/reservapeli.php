<?php

if (!empty($_POST['btnreservar'])){
    if (!empty($_POST['nombre'])and !empty($_POST["pelicula"])and !empty($_POST["fecha"])and !empty($_POST["hora"])and !empty($_POST["fila"])and !empty($_POST["asiento"])) {;

    $nombre = $_POST['nombre'];
    $pelicula = $_POST['pelicula'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $fila = $_POST['fila'];
    $asiento = $_POST['asiento'];
    
    $sql=$conexion->query(" select * from reserva where pelicula='$pelicula' and fecha='$fecha' and hora='$hora' and fila='$fila' and asiento='$asiento'");
        if($datos=$sql->fetch_object()){
            echo '<h1 class="alert alert-danger">Error al Reservar: Fila y/o Asiento ya fueron reservados</h1>';
        } 
        else{ 
            $sql = $conexion ->query("INSERT INTO reserva (nombre, pelicula, fecha, hora, fila, asiento)
    VALUES('$nombre','$pelicula','$fecha','$hora','$fila','$asiento')");
    if($sql==1) {
        echo '<h1>¡Su reserva fue existosa!</h1>';
        echo '<h1><a href="index.html">Volver al inicio</a></h1>';
    }
  }
 }if(empty($_POST["nombre"]) or empty ($_POST["pelicula"]) or empty ($_POST["fecha"]) or empty ($_POST["hora"]) or empty ($_POST["fila"]) or empty ($_POST["asiento"])){
    echo '<h1 class="alert alert-danger">Seleccione y/o complete todos los campos</h1>';
 }
}
?>