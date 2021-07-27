<?php 
	require_once ("../CONEXAO SQL/config.php");
	require_once ("../CONEXAO SQL/classe/sql.php");
	require_once ("../CONEXAO SQL/classe/usuario.php");

	$user=new Usuario;

	if (isset($_POST['usuario']))
	{
		$usuario = addslashes($_POST['usuario']);
		$senha = addslashes($_POST['senha']);

		if (isset($usuario))
		{
			$user->login($usuario,$senha);
			header("location: ../index.php");
		}
		else
		{
			$user->Exception();
		}
	}
	else
	{

	}

?>