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


	public function loadById($id)
	{
		$sql =new Sql();
		$results=$sql->select("SELECT*FROM usuario WHERE id= :ID",array(":ID"=>$id));

		if (count($results) > 0)
		{
			$this->setData($results[0]);
		}
	}


	public static function getList()
	{

		$sql =new Sql();
		return $sql->select("SELECT *FROM usuario ORDER BY login;");
	}
}

?>