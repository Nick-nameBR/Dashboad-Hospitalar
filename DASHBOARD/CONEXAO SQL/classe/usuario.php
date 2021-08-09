<?php 

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
	public function loadByLogin($login)
	{
		$sql =new Sql();
		$results=$sql->select("SELECT*FROM usuario WHERE login= :LOGIN",array(":LOGIN"=>$login));

		if (count($results) > 0){

			$this->setData($results[0]);
		}
	}


	//FAZ O LOGIN DO USUARIO
	public function login($login,$senha)
	{
		$sql =new Sql();
		$results=$sql->select("SELECT*FROM usuario WHERE login= :LOGIN AND senha = :SENHA",array(":LOGIN"=>$login, ":SENHA"=>$senha));

		//VALIDA SE TEM REGISTRO NO BANCO DE DADOS
		if (count($results) > 0){
			$this->setData($results[0]);
			session_start();
		}
		//SE NÃO TIVER, RETORNA ERRO.
		else {
			throw new Exception ("Login e/ou senha inválidos.");
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
		$this->setSenha($senha);

		$sql = new Sql();
		$sql->query("UPDATE usuario SET senha= :SENHA WHERE login=:LOGIN",array(':SENHA'=>$this->getSenha(),':LOGIN'=>$this->getLogin()));
	}
	

	//TRANSFORMA EM UM JSON O RESULTADO APRESENTADO NA TELA
	public function __toString()
	{
		return json_encode(array(
		"id"=>$this->getId(),
		"login"=>$this->getLogin(),
		"senha"=>$this->getSenha(),
		"nome"=>$this->getNome()));
	}
}

?>