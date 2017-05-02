<?php

function conectarBBDD(){
    $db = @mysqli_connect('localhost', 'root', 'root');
    if($db){
        mysqli_select_db('tuita', $db);//aqui se selecciona la bbdd que queramos
        return $db;
    }
    return NULL;
}

function desconectarBBDD($conexion){
    if($conexion){
        @mysqli_close($conexion);
    }
}

    /*$con = conectarBBDD();
    echo "conecta </br>";
    if($con != NULL){
        $sql = "SELECT nombreusuario from usuarios";
        $result = mysqli_query($sql, $con);
        echo "guarda consulta </br>";
        mysqli_store_result($con);
        if(mysqli_num_rows($result) > 0){
          echo "realiza consulta";
          while($row = mysql_fetch_assoc($result)){
            echo '$row["nombreusuario"]'."</br>";
          }
        }
    }
    desconectarBBDD($con);*/
$mysqli = new mysqli("localhost","root", "root", "Tuita");

$query = $mysqli->prepare("SELECT * FROM usuarios");
$query->execute();
$query->store_result();

$rows = $query->num_rows;

echo $rows;

 ?>
