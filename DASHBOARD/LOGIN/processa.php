<?php 
	require_once ("../CONEXAO SQL/config.php");
	require_once ("../CONEXAO SQL/classe/sql.php");
	require_once ("../CONEXAO SQL/classe/usuario.php");

	$user=new Usuario;

	if(isset($_POST['usuario']))
	{
		$usuario = addslashes($_POST['usuario']);
		$senha = addslashes($_POST['senha']);
		$confsenha = addslashes($_POST['confsenha']);

		if(!empty($usuario) && !empty($senha) && !empty($confsenha))
		{
			if ($senha === $confsenha)
			{
				$user->loadById($usuario);
				$user->update($senha);
			}
			else
			{
				$erro="Senha informada não são iguais, tente novamente.";
				echo "<script type='text/javascript'>alert('$erro');</script>";
			}
		}
		else 
		{

			$erro2= "Todos os campos devem ser preenchidos.";
			echo "<script type='text/javascript'>alert('$erro2');</script>";
		}
	}
	else
	{

	}
?>