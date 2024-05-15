<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section>
		<h1>Resultado Final</h1>
		<?php
		$res = 234;
		//$res = $_GET["num"];
		$ant = ($res - 1);
		$prox = ($res + 1);
		echo "<p>O número escolhido foi $res</p>";
		echo "<p>O seu <i>antecessor<i> é $ant</p>";
		echo "<p>O seu <i>sucessor<i> é $prox</p>";
		?>
	</section>
</body>
</html>