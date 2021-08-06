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
	public function setsenha($value){
		$this->senha= $value;
	}



	public function loadById($id)
	{
		$sql =new Sql();
		$results=$sql->select("SELECT*FROM usuario WHERE id= :ID",array(":ID"=>$id));

		if (count($results) > 0){

			$this->setData($results[0]);
		}
	}

	public static function getList(){

		$sql =new Sql();
		return $sql->select("SELECT *FROM tb_usuarios ORDER BY deslogin;");
	}


	public function logar($login,$senha){
		$sql =new Sql();
		$results=$sql->select("SELECT*FROM usuario WHERE login= :LOGIN AND senha = :SENHA",array(":LOGIN"=>$login, ":SENHA"=>$senha));

		if (count($results) > 0){
			$this->setData($results[0]);
		} 
		else {
			throw new Exception ("Login e/ou senha inválidos.");
		}
	}

	public function setData($dados){
		$this->setId($dados['id']);
		$this->setLogin($dados['login']);
		$this->setSenha($dados['senha']);
		$this->setNome($dados['nome']);
	}


	public function update($senha){
		$this->setSenha($senha);

		$sql = new Sql();
		$sql->query("UPDATE usuario SET senha= :SENHA WHERE login=:LOGIN",array(':SENHA'=>$this->getSenha(),':LOGIN'=>$this->getLogin()));
	}
	
	public function __toString(){
	return json_encode(array(
		"id"=>$this->getId(),
		"login"=>$this->getLogin(),
		"senha"=>$this->getSenha(),
		"nome"=>$this->getNome()));
	}
}

?>