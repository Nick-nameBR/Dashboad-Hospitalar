<?php

	require_once ("..\CONEXAO SQL\classe\usuario.php");
	require_once("..\CONEXAO SQL\config.php");

	$user = new Usuario();

	if(isset($_POST['usuario']))
	{
		$usuario = addslashes($_POST['usuario']);
		$senha = addslashes($_POST['senha']);

		if (!empty($usuario) && !empty($senha)){

			$user->login($usuario,$senha);
			session_start();
			header("location: ..\index.php");
		}
		else{
			echo"todos os campos devem ser preenchidos";
		}
	}
	else{

	}
?>