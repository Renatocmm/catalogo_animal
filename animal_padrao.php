<?php
	
	class animal
	{
		public $peso;
		public $comprimento;
		public $altura;
		public $cor;
		public $especie;
		public $tipo;

		public function __construct($peso, $comprimento, $altura, $cor, $especie, $tipo)
		{
			$this->peso=$peso;
			$this->comprimento=$comprimento;
			$this->altura=$altura;
			$this->cor=$cor;
			$this->especie=$especie;
			$this->tipo=$tipo;
		}

		public function exibir_dados_animal()
		{
			echo
			"
				peso: $this->peso <br />
				comprimento: $this->comprimento <br />
				altura: $this->altura <br />
				cor: $this->cor <br />
				especie: $this->especie <br />
				tipo: $this->tipo <br />
			
			";
		}

	}

?>