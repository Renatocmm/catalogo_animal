<?php
	include_once("animal_padrao.php");
	class peixe extends animal 
	{
		public $temperatura;

		public function __construct($peso, $comprimento, $altura, $cor, $especie, $tipo, $temperatura)
		{
			parent:: __construct($peso, $comprimento, $altura, $cor, $especie, $tipo);
			$this->temperatura=$temperatura;
		}

		public function exibir_dados()
		{
			$this->exibir_dados_animal();
			echo"temperatura media: $this->temperatura";
		}

	}
?>