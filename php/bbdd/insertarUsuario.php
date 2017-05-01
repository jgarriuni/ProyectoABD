<?php

    function insertarUsuario(){
        require('conexion.php');
        $con = conectarBBDD();
        if($con != -1){
            $insert = "INSERT INTO usuarios (nombreUsuario,nombre,apellidos,pass,fechaNacimiento, administrador) VALUES ('$_POST['Usuario']', '$_POST['Nombre']', '$_POST['Apellidos']', '$_POST['Contrasenia']', '$_POST['Fecha']', 'false')";
        }
        else{

        }

    }
?>
