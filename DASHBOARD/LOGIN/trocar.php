<?php 

	
	require_once ("../CONEXAO SQL/classe/conexao.php");
	if(isset($_POST['login']))
	{

		$conn=new Conexao();
		$usuario = addslashes($_POST['login']);
		$senha = addslashes($_POST['senha']);
		$confsenha = addslashes($_POST['confsenha']);

		if(!empty($usuario) && !empty($senha) && !empty($confsenha))
		{
			$conn->conectar("dashboard","localhost","root","");
			if ($user->msgErro == ""){

				if ($senha == $confsenha){

					$conn->update($senha,$login);
					echo '<script>alert("Senha Alterada com Sucesso!")</script>';
					header("location: login.php");
				}
				else{		
					echo '<script>alert("As senhas não correspondem")</script>';
					header("location:trocar.php");
				}
			}	
			else{
				echo "Erro: ".$msgErro;
			}
		}
		else 
		{
			echo '<script>alert("Todos os campos devem ser preenchidos.")</script>';
		}
	}
	else
	{
		echo '<script>alert("Usuario inexistente.")</script>';
		header("location: login.php");
		exit;
	}
?>