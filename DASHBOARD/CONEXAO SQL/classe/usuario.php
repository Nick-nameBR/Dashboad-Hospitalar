<?php 

class Usuario
{
	private $id;
	private $nome;
	private $login;
	private $senha;


	public function getId(){
		return $this->id;
	}
	public function setId($value){
		$this->id= $value;
	}


	public function getNome(){
		return $this->nome;
	}
	public function setNome($value){
		$this->nome= $value;
	}


	public function getLogin(){
		return $this->login;
	}
	public function setLogin($value){
		$this->login= $value;
	}


	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($value){
		$this->senha= $value;
	}



	public function loadById($login)
	{
		$sql =new Sql();
		$results=$sql->select("SELECT*FROM usuario WHERE login= :LOGIN",array(":LOGIN"=>$login));

		if (count($results) > 0){

			$this->setData($results[0]);
		}
	}


	//FUNÇÃO PEGA A LISTA DE USUARIO DO BD
	public static function getList()
	{

		$sql =new Sql();
		return $sql->select("SELECT *FROM usuario ORDER BY login;");
	}


	//FUNÇÃO SELECT USUARIO PARA LOGIN
	public function login($login,$senha)
	{
		$sql =new Sql();
		$results=$sql->select("SELECT*FROM usuario WHERE login= :LOGIN AND senha = :SENHA",array(":LOGIN"=>$login, ":SENHA"=>$senha));

		if (count($results) > 0){
			$this->setData($results[0]);
		} 
		else {
			throw new Exception ("Login e/ou senha inválidos.");
		}
	}


	public function setData($dados)
	{
		$this->setId($dados['id']);
		$this->setNome($dados['nome']);
		$this->setLogin($dados['login']);
		$this->setSenha($dados['senha']);
	}


	//FUNÇÃO UPDATE SENHA
	public function update($senha)
	{
		$this->setSenha($senha);

		$sql = new Sql();
		$sql->query("UPDATE usuario SET senha= :SENHA WHERE id=:ID",array(':SENHA'=>$this->getSenha(),':ID'=>$this->getId()));
	}


	public function __toString(){
	return json_encode(array(
		"id"=>$this->getId(),
		"nome"=>$this->getNome(),
		"login"=>$this->getLogin(),
		"senha"=>$this->getSenha()));
	}
}

?>