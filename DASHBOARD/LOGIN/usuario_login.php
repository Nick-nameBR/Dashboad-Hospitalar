<?php 
	require_once ("../CONEXAO SQL/classe/sql.php");
	require_once ("../CONEXAO SQL/classe/usuario.php");

	session_start();

	$user=new Usuario;

	if (isset($_POST['usuario']))
	{
		$usuario = addslashes($_POST['usuario']);
		$senha = addslashes($_POST['senha']);

		if (isset($usuario))
		{
			$user->login($usuario,$senha);
			header("location: ../index.php");
			exit;
		}
		else
		{
			echo '<script>alert("Login e/ou senha incorretos.")</script>';
			header("location: ../index.php");
			exit;
		}
	}
	else
	{
		echo '<script>alert("Usuario inexistente.")</script>';
		header("location: ../index.php");
		exit;
	}

?>