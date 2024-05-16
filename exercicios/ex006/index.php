<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do formulário
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
	        <label for="v1">Valor 1</label>
	        <input type="number" name="v1" id="v1" value="<?=$v1?>">
	        <label for="v2">Valor 2</label>
	        <input type="number" name="v2" id="v2" value="<?=$v2?>">
	        <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $v1 + $v2;
            echo "<p>A soma entre os valores $v1 e $v2 é <strong>$soma<strong></p>";
        ?>
    </section>
</body>
</html>