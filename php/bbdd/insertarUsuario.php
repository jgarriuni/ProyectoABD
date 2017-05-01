<?php

    function insertarUsuario($conexion, $nombreUsuario, $nombre, $apellidos, $pass, $fechaNacimiento){

        $insert = "INSERT INTO usuarios (nombreUsuario,nombre,apellidos,pass,fechaNacimiento, administrador) VALUES ('$nombreUsuario','$nombre','$apellidos','$pass','$fechaNacimiento','false')";

        if(mysql_query($insert, $conexion)){
            echo "ok </br>";
        }
        else{
            echo "ERROR " . mysql_error() + "</br>";
        }
        desconectarBBDD($conexion);
    }
?>
