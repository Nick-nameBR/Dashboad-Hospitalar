<?php 

	require_once("config.php");


	//CARREGA UM USUARIO LOGIN E SENHA
	$user = new Usuario();
	$user->login("22487","nikolas2021"); 
	echo "<br>";
	echo "Logado com sucesso!";





	//UPDATE DE USUARIO
	/*$user= new Usuario();
	$user->loadByLogin(22487);
	$user->update("nikolas2021");
	echo "<br>";
	echo "Senha alterada com sucesso!";*/
?>