<?php 

require_once("config.php");

//CARREGA LISTA DE USUARIO
$lista= Usuario::getList();
echo json_encode($lista);


?>