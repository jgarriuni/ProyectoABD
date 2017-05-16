<?php
function conectarBBDD(){
    /*
    $db = @mysql_connect('localhost', 'root', '');
    if($db){
        mysql_select_db('tuita', $db);//aqui se selecciona la bbdd que queramos
        return $db;
    }
    return NULL;
    */
    $db = new mysqli("localhost", "root", "", "tuita");

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
	//$mensaje = "";
	if(!isset($_GET['nombre'])){
		echo "no </br>";
	}
	else{
		echo "si </br>";
	}
	echo "Nombre: ".$_REQUEST['nombre']."</br>";
	$usu = $_REQUEST['nombre'];
	echo "Nombre: ".$usu."</br>";
    if($con != NULL){
    	$result = $con->query("SELECT nombreusuario from usuarios");
    	if($result->num_rows > 0){
    		while($row = $result->fetch_assoc()){
          		$encontrado .= ($row["nombreusuario"] == $_GET['nombre']);
				echo $encontrado + "\n";
				//$mensaje .= $row['nombreusuario']."</br>";
			}
        }
    }
    desconectarBBDD($con);
    if($encontrado){
		echo "encontrado";
	}
	else{
		echo "no encontrado";
	}
	//echo $mensaje;

?>