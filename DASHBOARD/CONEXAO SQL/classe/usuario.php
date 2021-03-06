<?php 

	require_once ("sql.php");
	session_start();

	class Usuario 
	{
		private $id;
		private $nome;
		private $login;
		private $senha;
	 /*------------------------------------------*/
		public function getId(){
			return $this->id;
		}
		public function setId($value){
			$this->id= $value;
		}
	 /*------------------------------------------*/
		public function getNome(){
			return $this->nome;
		}
		public function setNome($value){
			$this->nome= $value;
		}
	 /*------------------------------------------*/
		public function getLogin(){
			return $this->login;
		}
		public function setLogin($value){
			$this->login= $value;
		}
	 /*------------------------------------------*/
		public function getSenha(){
			return $this->senha;
		}
		public function setsenha($value){
			$this->senha= $value;
		}
 	 /*------------------------------------------*/

		//CARREGA O LOGIN (NÚMERO) DO USUARIO
		public function loadByLogin($id)
		{
			$sql =new Sql();
			$results=$sql->select("SELECT*FROM usuario WHERE login= :LOGIN",array(":LOGIN"=>$id));

			if (count($results) > 0){

				$this->setData($results[0]);
			}
		}


		//FAZ O LOGIN DO USUARIO
		public function login($usuario,$senha)
		{
			$sql =new Sql();
			$results=$sql->select("SELECT*FROM usuario WHERE login= :LOGIN AND senha = :SENHA",array(":LOGIN"=>$usuario, ":SENHA"=>md5($senha)));

			//VALIDA SE TEM REGISTRO NO BANCO DE DADOS
			if (count($results) > 0){
				$this->setData($results[0]);

				$_SESSION['usuario'] = $usuario;
				$_SESSION['senha'] = $senha;
			}

			//SE NÃO TIVER, FAZ UNSET
			else {
				unset($_SESSION['usuario']);
				unset($_SESSION['senha']);
			}
		}

		public function setData($dados)
		{
			$this->setId($dados['id']);
			$this->setLogin($dados['login']);
			$this->setSenha($dados['senha']);
			$this->setNome($dados['nome']);
		}

		//FAZ A ATUALIZAÇÃO DE SENHA DO USUARIO
		public function update($senha)
		{
			$this->setSenha(md5($senha));

			$sql = new Sql();
			$sql->query("UPDATE usuario SET senha= :SENHA WHERE login=:LOGIN",array(':SENHA'=>$this->getSenha(),':LOGIN'=>$this->getLogin()));
		}


		//CRIA UM USUARIO NO BANCO DE DADOS
		public function insert()
		{
			$sql= new Sql();
			$results=$sql->select("CALL sp_usuarios_insert(:NOME,:LOGIN,:SENHA)",array(':NOME'=>$this->getNome(),':LOGIN'=>$this->getLogin(), ':SENHA'=>$this->getSenha()));

			if (count($results) > 0){

				$this->setData($results[0]);
			}
		}
	

		//DELETA O USUARIO DO BANCO DE DADOS
		public function delete()
		{
			$sql = new Sql();
			$sql->query("DELETE FROM usuario WHERE id=:ID",array(':ID'=>$this->getId()));
		}


		//TRANSFORMA EM UM JSON O RESULTADO APRESENTADO NA TELA
		public function __toString()
		{
			return json_encode(array(
			"id"=>$this->getId(),
			"login"=>$this->getLogin(),
			"nome"=>$this->getNome(),
			"senha"=>$this->getSenha()));	
		}
	}
?>