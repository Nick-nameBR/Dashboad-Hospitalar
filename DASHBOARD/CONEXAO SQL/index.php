<?php 

	require_once("config.php");


	//CARREGA UM USUARIO LOGIN E SENHA
	/*$user = new Usuario();
	$user->login("22487","nikolas2021"); 
	echo "<br>";
	echo "Logado com sucesso!";
	echo "<br>";
	var_dump($_SESSION['usuario']);
	var_dump($_SESSION['senha']);*/


	// INSERT DE USUARIO
	/*$usuario=new Usuario();
	$usuario->setNome("JOAO NINGUEM");
	$usuario->setLogin("201912");
	$usuario->setSenha("1132");
	$usuario->insert();
	echo $usuario;*/


	//UPDATE DE USUARIO
	/*$user= new Usuario();
	$user->loadByLogin(22487);
	$user->update("nikolas2021");
	echo "<br>";
	echo "Senha alterada com sucesso!";*/


	//DELETE DE USUARIO
	/*$user=new Usuario();
	$user->loadByLogin(13232);
	$user->delete();
	echo $user;
	echo "<br>";
	echo "USUARIO EXCLUIDO COM SUCESSO!";*/


	//BUSCA DADOS GRAFICO
	$data= Graficos::taxaVivos();
	$data2= Graficos::taxaPrematuro();
	$data3= Graficos::taxaApgar();
	echo json_encode($data);
	echo json_encode($data2);
	echo json_encode($data3);
?>