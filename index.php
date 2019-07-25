<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Exercice 3 PHP</title>
</head>
<body>
	<h1>Créer une variable number. L'initialiser à 140. Lui ajouter 30.
		La diviser par 2 et afficher le résultat. N'utiliser qu'une variable</h1>
		<?php
		$number = 140;
		?>
		<p style="color:blue">variable $number =
			<?php echo $number;?>
		</p>
		<p style="color:blue">variable $number +30 =
			<?php $number += 30;
			echo $number;?>
		</p>
		<p style="color:blue">variable $number /2 =
			<?php $number = $number/2;
			echo $number;?>
		</p>
	</body>
	</html>
