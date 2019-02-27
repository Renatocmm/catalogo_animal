<?php
	include_once("animal_padrao.php");
	class mamifero extends animal 
	{
		public $velocidade;

		public function __construct($peso, $comprimento, $altura, $cor, $especie, $tipo, $velocidade)
		{
			parent:: __construct($peso, $comprimento, $altura, $cor, $especie, $tipo);
			$this->velocidade=$velocidade;
		}

		public function exibir_dados()
		{
			$this->exibir_dados_animal();
			echo"velocidade maxima: $this->velocidade";
		}

	}
?>