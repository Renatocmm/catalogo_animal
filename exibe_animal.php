<?php

	 $peso = $_POST["peso"];
	 $comprimento = $_POST["comprimento"];
	 $altura = $_POST["altura"];
	 $cor = $_POST["cor"];
	 $especie = $_POST["especie"];

	 switch ($_POST["animal"]) {
	 	case 'ave':
	 		include_once("ave.php");
	 		$altura = $_POST["altura"];
	 		$ave = new ave($peso, $comprimento, $altura, $cor, $especie, "ave", $altura);
	 		$ave->exibir_dados();
	 		break;

	 	case 'anfibio':
	 		include_once("anfibio.php");
	 		$submerso = $_POST["submerso"];
	 		$anfibio = new anfibio($peso, $comprimento, $altura, $cor, $especie, "anfibio", $submerso);
	 		$anfibio->exibir_dados();
	 		break;

	 	case 'mamifero':
	 		include_once("mamifero.php");
	 		$velocidade = $_POST["velocidade"];
	 		$mamifero = new mamifero($peso, $comprimento, $altura, $cor, $especie, "mamifero", $velocidade);
	 		$mamifero->exibir_dados();
	 		break;

	 	case 'peixe':
	 		include_once("peixe.php");
	 		$temperatura = $_POST["temperatura"];
	 		$peixe = new peixe($peso, $comprimento, $altura, $cor, $especie, "peixe", $temperatura);
	 		$peixe->exibir_dados();
	 		break;

	 	case 'reptil':
	 		include_once("reptil.php");
	 		$submerso = $_POST["submerso"];
	 		$reptil = new reptil($peso, $comprimento, $altura, $cor, $especie, "reptil", $submerso);
	 		$reptil->exibir_dados();
	 		break;
	 	
	 	default:
	 		# code...
	 		break;
	 }
	
?>