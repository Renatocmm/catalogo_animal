<!DOCTYPE html>
<html>
	<head>
		<title>catalogo de animais</title>
	</head>
	<body>
		
		<?php
		
			if(empty($_GET))
			{
				echo'

				<form action = "form_animal.php" method = "get">

					<fieldset>
						<legend>Cadastrar animal</legend>

						<input type = "radio" name = "animal" value = "ave"/>
						<label>Ave</label>

						<input type = "radio" name = "animal" value = "anfibio"/>
						<label>Anfibio</label>

						<input type = "radio" name = "animal" value = "mamifero"/>
						<label>Mamifero</label>

						<input type = "radio" name = "animal" value = "peixe"/>
						<label>Peixe</label>

						<input type = "radio" name = "animal" value = "reptil"/>
						<label>Reptil</label>

						<br /><br />

						<button type = "submit"/>Proximo</button>
					</fieldset>
				</form>
				';
			}
			else
			{
				if ($_GET["animal"] == 'ave')
				{
						include_once("form_padrao.php");
					echo 
					'
							<input type = "number"  name = "altura" placeholder = "altura maxima de voo"/>
							<br />
							<button>Enviar</button>
						</form>
					';

				}
				else if ($_GET["animal"] == 'anfibio' || 'reptil') 
				{
					include_once("form_padrao.php");
					echo 
					'
							<input type = "number" name = "submerso" placeholder = "Tempo maximo que submerso em agua"/>
							<br />
							<button>Enviar</button>
						</form>
					';
				}
				else if ($_GET["animal"] == 'mamifero')
				{
					include_once("form_padrao.php");
					echo 
					'
							<input type = "number" name = "velocidade" placeholder = "velocidade maxima"/>
							<br />
							<button>Enviar</button>
						</form>
					';
				}
				else if ($_GET["animal"] == 'peixe') 
				{
					include_once("form_padrao.php");
					echo 
					'
							<input type = "number" name = "temperatura" placeholder = "Temperatura media"/>
							<br />
							<button>Enviar</button>
						</form>
					';
				}
			}
		?>
	</body>
</html>	