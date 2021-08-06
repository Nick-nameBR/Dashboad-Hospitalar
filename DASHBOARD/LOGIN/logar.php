<?php 


	if(isset($_POST['login']))
	{
		
		require_once ("../CONEXAO SQL/classe/sql.php");
		require_once ("../CONEXAO SQL/classe/usuario.php");

		$user= new Usuario();
		$usuario = addslashes($_POST['login']);
		$senha = addslashes($_POST['senha']);
		
		if(!empty($usuario) && !empty($senha))
		{
			if($user->logar($login,$senha)){

				header("location: ../index.php");	
			}
			else{
				echo"usuario ou senha inválido";
				header("location: login.php");	
			}		
		}
		else{
			echo"preencha todos os campos";
			header("location: login.php");
		}
	}
	else{

	}
?>