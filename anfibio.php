<?php
	include_once("animal_padrao.php");
	class anfibio extends animal 
	{
		public $submerso;

		public function __construct($peso, $comprimento, $altura, $cor, $especie, $tipo, $submerso)
		{
			parent:: __construct($peso, $comprimento, $altura, $cor, $especie, $tipo);
			$this->submerso=$submerso;
		}

		public function exibir_dados()
		{
			$this->exibir_dados_animal();
			echo"tempo maximo submerso: $this->submerso";
		}

	}
?>