<?php 

require_once("config.php");


//CARREGA UM USUARIO LOGIN E SENHA
//$user = new Usuario();
//$user->login("22466","2wqe21E");
//echo $user;

//UPDATE DE USUARIO
$user= new Usuario();
$user->loadById(1);
$user->update("N!K@!2");
echo $user;
echo "Senha alterada com sucesso!";

?>