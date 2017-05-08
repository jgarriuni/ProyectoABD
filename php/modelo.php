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
    $db = new mysqli("localhost", "root", "", "Tuita");

    if(!$db->connect_error){
      return $db;
    }
    return NULL;
}

function desconectarBBDD($conexion){
    $conexion->close();
}

//FIN DE FUNCIONES PARA LA BASE DE DATOS

//SELECT
//para registro
function buscarUsuario($usuario){
	/*
	 * 	mysql_fetch_row
		This function will return a row where the values will come in the order
		as they are defined in the SQL query, and the keys will span from 0 to one
		less than the number of columns selected.

		mysql_fetch_assoc
		This function will return a row as an associative array where the column
		names will be the keys storing corresponding value.

		mysql_fetch_array
		This function will actually return an array with both the contents of
		mysql_fetch_rowand mysql_fetch_assoc merged into one. It will both have
		numeric and string keys which will let you access your data in whatever
		way you'd find easiest.
	 * */
    $con = conectarBBDD();
    $encontrado = false;

    if($con != NULL){
    	$result = $con->query("SELECT nombreusuario from usuarios");
    	if($result->num_rows > 0){
    		while($row = $result->fetch_assoc()){
          		$encontrado .= ($row["nombreusuario"] == $usuario);
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
		$result = $con->query("SELECT nombreusuario, pass from usuarios");
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$encontrado .= ($row["nombreusuario"] == $usuario && $row["pass"] == $pass);
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

        if($con->query($insert) === TRUE){
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

//FUNCIONES PARA MANDAR MENSAJES

function mandarMensajeATodosUsuarios($mensaje, $destinatarioGrupo, $destinatarioUsuario, $emisor){

    $con = conectarBBDD();
    if($con != NULL){
        $insert = "INSERT INTO mensajes (mensaje,destinatarioGrupo, destinatariousuario,emisor)
        VALUES ('$mensaje','$destinatarioGrupo','$destinatarioUsuario','$emisor')";

        if($con->query($insert) === TRUE){
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
//FIN DE FUNCIONES PARA MANDAR MENSAJES
?>
