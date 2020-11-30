<?php 

include("preencher.php");
 ?>

<html>
	<head>
	<title>Exemplo</title>
</head>
<body>





<div class="form-group">
	<select name="questao" class="custom-select" required>
	    <option selected>Deseja receber dicas sobre:</option>
		<?php

			// se o número de resultados for maior que zero, mostra os result
			if($_SESSION['total_duvida'] > 0) {
				// inicia o loop que vai mostrar todos os result
				while ($_SESSION['total_duvida'] > 0) {
				
		?>
		<option value = <?php $_SESSION['id_duvida'] ?>><?php $_SESSION['questao_duvida'] ?></option>
		<?php
			// finaliza o loop que vai mostrar os result
			}
		// fim do if
		}
		?>
	</select>
</div>

</body>
</html>