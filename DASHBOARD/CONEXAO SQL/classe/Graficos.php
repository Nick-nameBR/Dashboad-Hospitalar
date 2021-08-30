<?php 

	require_once ("sql.php");

	class Graficos{

		private $ano;
		private $mes;
		private $recen_nascido;
		private $morto;
		private $recen_nascido_obito;
		private $prematuro;
		private $apgar_bruto;
		private $apgar_ma2500;
		private $apgar_compativel;
		/*-------------------------------------*/

		public function getAno(){
			return $this->$ano;
		}
		public function setAno($value){
			$this->ano=$value;
		}

		/*-------------------------------------*/

		public function getMes(){
			return $this->$mes;
		}
		public function setMes($value){
			$this->mes=$value;
		}

		/*-------------------------------------*/

		public function getRecen_nascido(){
			return $this->$recen_nascido;
		}
		public function setRecen_nascido($value){
			$this->recen_nascido=$value;
		}

		/*-------------------------------------*/

		public function getMorto(){
			return $this->$morto;
		}
		public function setMorto($value){
			$this->morto=$value;
		}

		/*-------------------------------------*/

		public function getRecen_nascido_obito(){
			return $this->$recen_nascido_obito;
		}
		public function setRecen_nascido_obito($value){
			$this->recen_nascido_obito=$value;
		}

		/*-------------------------------------*/

		public function getPrematuro(){
			return $this->$prematuro;
		}
		public function setPrematuro($value){
			$this->prematuro=$value;
		}

		/*-------------------------------------*/

		public function getApgar_bruto(){
			return $this->$apgar_bruto;
		}
		public function setApgar_bruto($value){
			$this->apgar_bruto=$value;
		}

		/*-------------------------------------*/

		public function getApgar_ma2500(){
			return $this->$apgar_ma2500;
		}
		public function setApgar_ma2500($value){
			$this->apgar_ma2500=$value;
		}

		/*-------------------------------------*/

		public function getApgar_compativel(){
			return $this->$apgar_compativel;
		}
		public function setApgar_compativel($value){
			$this->apgar_compativel=$value;
		}

		/*-------------------------------------*/

		//SELECT GRAFICO TAXA DE VIVOS
		public function taxaVivos(){
			$sql = new Sql();
			return $sql->select("SELECT SUM(TT_RNV) as 'Vivos',SUM(TT_RN_MORTO) as 'Mortos' FROM dt_bi_rn WHERE ano = 2020");
		}
		//FIM DO SELECT


		//SELECT GRAFICO TAXA DE PREMATURO
		public function taxaPrematuro(){
			$sql = new Sql();
			return $sql->select("SELECT SUM(TT_RNV) as 'Vivos',SUM(TT_RNV_PRETERMO) as 'Prematuro' FROM dt_bi_rn WHERE ano = 2020");
		}
		//FIM DO SELECT


		//SELECT GRAFICO TAXA DE APGAR
		public function taxaApgar(){
			$sql = new Sql();
			return $sql->select("SELECT SUM(TT_RNV_APGAR5_M7_BRUTO) as 'Apgar Bruto',SUM(TT_RNV_PESO_MA2500) as 'Apgar Peso',SUM(TT_RNV_APGAR5_M7_COMPATIVEL) AS 'Apgar Compativel' FROM dt_bi_rn WHERE ano = 2020");
		}
		//FIM DO SELECT
	}
?>