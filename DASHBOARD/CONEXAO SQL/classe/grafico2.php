<?php

	require_once ("sql.php");

	class Grafico2 {

		private $ano;
		private $mortes;
		private $area;
		/*----------------------------------*/
		public function getAno(){
			return $this->$ano;
		}
		public function setAno($value){
			$this->ano= $value;
		}
		/*----------------------------------*/

		public function getMortes(){
			return $this->$mortes;
		}
		public function setMortes($value){
			$this->mortes= $value;
		}
		/*----------------------------------*/

		public function getArea(){
			return $this->$area;
		}
		public function setArea($value){
			$this->area= $value;
		}
		/*----------------------------------*/


		/*BUSCA OS DADOS DOS GRAFICOS*/
		public function select2000(){
			$sql = new Sql();
			return $sql->select("SELECT ano,mortes,area FROM grafico2 WHERE ano = 2000");
		}

		public function select2015(){
			$sql = new Sql();
			return $sql->select("SELECT ano,mortes,area FROM grafico2 WHERE ano = 2015");
		}
	}
?>