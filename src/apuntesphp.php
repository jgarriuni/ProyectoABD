<?php
/*$mysqli = new mysqli("localhost","root", "root", "Tuita");

$query = $mysqli->prepare("SELECT * FROM usuarios");
$query->execute();
$query->store_result();

$rows = $query->num_rows;

echo $rows;*/

require('../php/modelo.php');
buscarUsuario("jose");
?>
