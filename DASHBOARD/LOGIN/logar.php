<?php 

	if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha']))
	{
		require '../CONEXAO SQL/classe/sql.php';
		require '../CONEXAO SQL/classe/usuario.php';

		$user= new Usuario();


		$login = addslashes($_POST['login']);
		$senha = addslashes($_POST['senha']);

		if($user->login($login,$senha)==true)
		{
			if(isset($_SESSION['Usuario']))
			{
				header('location:../dashboard.php');
			}
			else{
				header('location:index.php');
			}
		}
		else{
			header('location:index.php');
		}
	}
	else{
		header('location:index.php');
	}
?>