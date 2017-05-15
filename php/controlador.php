<?php

require('modelo.php');

//TESTEAR DATOS
function testear($dato){
    return testearDato($dato);
}
//FIN TESTEAR DATOS

//FUNCIONES PARA LA BASE DE DATOS

//NO HAY PORQUE CADA FUNCION SE CONECTA Y SE DESCONECTA CUANDO LO NECESITA

//FIN DE FUNCIONES PARA LA BASE DE DATOS

//SELECT
//para registro
function buscar($usuario){
    return buscarUsuario($usuario);
}
//para inicio de sesion
function autenticar($usuario, $pass){
    return autenticarUsuario($usuario, $pass);
}

//para ver mensajes dirigidos a todos
function verMensajesATodos(){
	return verMensajesTodos();
}

function verMensajesAPrivados($usuario){
	return verMensajesPrivados($usuario);
}
//FIN SELECT

//INSERT

function insertar($usuario, $nombre, $apellidos, $pass, $fecha){
    return insertarUsuario($usuario, $nombre, $apellidos, $pass, $fecha);
}

//FIN INSERT

//FUNCIONES PARA MANDAR MENSAJES

function mandarMensajeATodos($mensaje, $emisor){
    return mandarMensajeATodosUsuarios($mensaje, $emisor);
}

function mansarMensajePrivado($mensaje, $usuario, $emisor){
	return mandarMensajeAUsuario($mensaje, $usuario, $emisor);
}
//FIN DE FUNCIONES PARA MANDAR MENSAJES
?>
