<?php 
	require_once ("..\CONEXAO SQL\classe\usuario.php");
	require_once("..\CONEXAO SQL\config.php");

	$user=new Usuario();

	if(isset($_POST['usuario']))
	{
		$usuario = addslashes($_POST['usuario']);
		$senha = addslashes($_POST['senha']);
		$confsenha = addslashes($_POST['confsenha']);

		if(!empty($usuario) && !empty($senha) && !empty($confsenha))
		{
			if ($senha == $confsenha)
			{

				$user->loadByLogin($usuario);
				$user->update($senha);

				echo '<script>alert("Senha Alterada com Sucesso!")</script>';
				//header("location:login.php");
			}
			else
			{		
				echo '<script>alert("A senha informada não são iguais")</script>';
			}
		}
		else 
		{
			echo '<script>alert("Todos os campos devem ser preenchidos.")</script>';
			exit;
		}
	}
	else
	{
		echo '<script>alert("Usuario inexistente.")</script>';
		header("location: .../login.php");
		exit;
	}
?>