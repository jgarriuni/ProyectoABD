<?php

//TRATAMIENTO DE DATOS

function testearDato($dato){
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

//FIN TRATAMIENTO DE DATOS

//FUNCIONES PARA LA BASE DE DATOS

function conectarBBDD(){
    /*
    $db = @mysql_connect('localhost', 'root', '');
    if($db){
        mysql_select_db('tuita', $db);//aqui se selecciona la bbdd que queramos
        return $db;
    }
    return NULL;
    */
    $db = new mysqli("localhost", "root", "root", "Tuita");

    if($db){
      return $db;
    }
    return NULL;
}

function desconectarBBDD($conexion){
    if($conexion){
        $conexion->close();
    }
}

//FIN DE FUNCIONES PARA LA BASE DE DATOS

//SELECT
//para registro
function buscarUsuario($usuario){

    $con = conectarBBDD();
    $encontrado = false;

    if($con != NULL){
        $result = $con->query("SELECT nombreusuario from usuarios where nombreusuario <> 'admin'");
        if($result->num_rows > 0){
          while($row = $result->fetch_row()){

          }
        }
    }
    desconectarBBDD($con);
    return $encontrado;
}

//para inicio de sesion
function autenticarUsuario($usuario, $pass){

    $con = conectarBBDD();
    $encontrado = false;
    if($con != NULL){
        $sql = "SELECT nombreusuario, pass from usuarios where nombreusuario <> 'admin' && nombreusuario = '$usuario'";
        $result = mysql_query($sql, $con);
        if(mysql_num_rows($result) > 0){
          while(!$encontrado && ($row = mysql_fetch_assoc($result))){
            $encontrado = (($row["nombreusuario"] == $usuario) && ($row["pass"] == $pass));
          }
        }
    }
    desconectarBBDD($con);
    return $encontrado;
}

//FIN SELECT

//INSERT

function insertarUsuario($nombreUsuario, $nombre, $apellidos, $pass, $fechaNacimiento){

    $con = conectarBBDD();
    if($con != NULL){
        //preparamos el insert
        $insert = "INSERT INTO usuarios (nombreUsuario,nombre,apellidos,pass,fechaNacimiento, administrador)
        VALUES ('$nombreUsuario', '$nombre', '$apellidos', '$pass', '$fechaNacimiento', 'false')";

        if(mysql_query($insert, $con)){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
    desconectarBBDD($con);
}

//FIN INSERT

//SESIONES DE USUARIO

function cerrarSesionUsuario(){
    session_unset();
    session_destroy();
}

//FIN SESIONES DE USUARIO

?>
