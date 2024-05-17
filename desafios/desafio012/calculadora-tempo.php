<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 12</title>
</head>
<body>
    <?php 
    $seg = $_GET['seg'] ?? 3600;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizado Tudo</h2>
        <?php
        $sobra = $seg;
        //Semanas
    	$semana = (int)($sobra/604800);
    	$sobra = ($sobra%604800);
    	//Dias
    	$dia = (int)($sobra/86400);
    	$sobra = ($sobra%86400);
    	//Horas
    	$hora = (int)($sobra/3600);
    	$sobra = ($sobra%3600);
    	//Minutos e segundos
    	$min = (int)($sobra/60);
    	$segundos = $sobra;
        
        
        echo "Analisando o valor que foi digitado,<strong>$seg segundos</strong> equivalem a um total de:";
        echo "<ul><li>$semana semanas<li>$dia dias<li>$hora horas<li>$min minutos<li>$segundos segundos</ul>";
        ?>
    </section>
</body>
</html>