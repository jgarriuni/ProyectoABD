<?php

    function desconectarBBDD($conexion){
        if($conexion){
          @mysql_close($conexion);
        }
    }

    function conectarBBDD(){
        $db = @mysql_connect('localhost', 'root', '');
        if($db){
            mysql_select_db('tuita', $db);//aqui se selecciona la bbdd que queramos
            return $db;
        }
        return -1;
    }
?>
