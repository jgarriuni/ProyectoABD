<?php

  function buscarUsuario($usuario){

    require('conexion.php');
    $con = conectarBBDD();
    $encontrado = false;

    if($con != -1){
      $sql = "SELECT nombreusuario from usuarios where nombreusuario <> 'admin'";
      $result = mysql_query($sql, $con);
        if(mysql_num_rows($result) > 0){

          while(!$encontrado && ($row = mysql_fetch_assoc($result))){
            $encontrado = ($row["nombreusuario"] == $usuario);
          }
        }
    }

    desconectarBBDD($con);
    return $encontrado;
  }
?>
