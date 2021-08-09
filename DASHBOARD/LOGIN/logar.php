<?php

	require ("..\CONEXAO SQL\classe\sql.php");
	require ("..\CONEXAO SQL\classe\usuario.php");

	$user = new Usuario();

	if(isset($_POST['login']))
	{
		$usuario = addslashes($_POST['login']);
		$senha = addslashes($_POST['senha']);

		if (!empty($usuario) && !empty($senha)) {
			
			$user->Login();

		}
	}
	else{

	}
?>