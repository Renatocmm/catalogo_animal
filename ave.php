<?php
	include_once("animal_padrao.php");
	class ave extends animal 
	{
		public $altura;

		public function __construct($peso, $comprimento, $altura, $cor, $especie, $tipo, $altura)
		{
			parent:: __construct($peso, $comprimento, $altura, $cor, $especie, $tipo);
			$this->altura=$altura;
		}

		public function exibir_dados()
		{
			$this->exibir_dados_animal();
			echo"altura maxima de voo: $this->altura";
		}

	}
?>