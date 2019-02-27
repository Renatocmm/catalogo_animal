<?php
	echo
	'
		<form action = "exibe_animal.php" method = "post">
			<fieldset>
				<legend>Cadastrar animal: '.$_GET["animal"].'</legend>

				<input type = "number" name ="peso" placeholder = "peso" />
				<input type = "number" name = "comprimento" placeholder = "comprimento" />
				<br /><br />
				<input type = "number" name = "altura" placeholder = "altura" />
				<input type = "text" name = "cor" placeholder = "cor" />
				<br /><br />
				<input type = "text" name = "especie" placeholder = "especie" />

				<input type = "hidden" name = "animal" value = "'.$_GET["animal"].'" />
	';
?>