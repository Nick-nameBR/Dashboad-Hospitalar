<?php 
	require_once ("classe/usuario.php");
	$user=new Usuario;

	if(isset($_POST['usuario']))
	{
		$usuario = addslashes($_POST['usuario']);
		$senha = addslashes($_POST['senha']);
		$confirmasenha = addslashes($_POST['confsenha']);

		if(!empty($usuario) && !empty($senha) && !empty(confirmasenha))
		{
			$user->conectar("dashboard","localhost","host","");
			if($user->$menssagem =="")
			{
				if($senha ===$confirmasenha)
				{
					$user->alterar($usuario,$senha);
				}
				else
				{
					echo "As senha não estão iguais.";
				}
			}
			else
			{
				echo "Erro".$user->$menssagem;
			}
		}
		else
		{
			echo "É necessário o preenchimento de todos os campos!";
		}
	}
	else{

	}
?>