<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 06</title>
</head>
<body>
    <?php 
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
        $resto = ($dividendo%$divisor);
        $resultado = ($dividendo/$divisor);
        echo "<ul><li>O dividendo é $dividendo<li>O Divisor é $divisor<li>O Resultado é igual a $resultado<li>O Resto é igual a $resto</ul>"; 
        ?>
    </section>
</body>
</html>