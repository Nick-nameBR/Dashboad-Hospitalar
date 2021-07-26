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
				echo "As senhas digitadas não são iguais.";
			}
		}
		else 
		{
			echo "Todos os campos devem ser preenchidos.";
		}
	}
	else
	{
		
	}
?>