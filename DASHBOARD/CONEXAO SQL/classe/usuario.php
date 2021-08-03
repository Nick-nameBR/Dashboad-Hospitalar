<?php 

	class Usuario
	{
		public function login($login,$senha){
			global $pdo;

			$sql = "SELECT *FROM usuario WHERE login= :login AND senha = :senha";
			$sql = $pdo->prepare($sql);
			$sql->bindValue("login",$login);
			$sql->bindValue("senha",$senha);
			$sql->execute();


			if($sql->rowCount() > 0)
			{
				$dados=$sql->fetch();

				$_SESSION['Usuario'] = $dados['login'];

				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>