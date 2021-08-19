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

				echo "<script>alert('Senha Alterada com Sucesso!');location.href=\"login.php\";</script>";
			}
			else
			{		
				echo "<script>alert('As senhas não são iguais');location.href=\"alterar_senha.php\";</script>";
			}
		}
		else 
		{
			echo "<script>alert('Todos os campos devem ser preenchidos');location.href=\"alterar_senha.php\";</script>";
			
		}
	}
	else
	{
		echo "<script>alert('Usuario Inexistente');location.href=\"login.php\";</script>";
	}
?>