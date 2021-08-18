<?php

	require_once ("CONEXAO SQL\classe\usuario.php");
	require_once("CONEXAO SQL\config.php");

	$user = new Usuario();

	if(isset($_POST['nome']) && isset($_POST['usuario']) && isset($_POST['senha']))
	{
		$nome = addslashes($_POST['nome']);
		$usuario = addslashes($_POST['usuario']);
		$senha = addslashes($_POST['senha']);

		if(!empty($nome) && !empty($usuario) && !empty($senha))
		{
			$user->setNome($nome);
			$user->setLogin($usuario);
			$user->setSenha($senha);
			$user->insert();

			echo "<script>alert('Usuario cadastrado com Sucesso!');location.href=\"cadastro.php\";</script>";
		}
		else
		{
			echo "<script>alert('Preencha todos os campos!');location.href=\"cadastro.php\";</script>";
		}	
	}
?>