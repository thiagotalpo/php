<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $ano = $_GET['ano'];
    $anoAtual = $_GET['idade'];
    ?>
    <main>
        <h2>Calculando Sua Idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano">
            <label for="idade">Quer saber sua idade em que ano? (Atualmente estamos em 2024)</label>
            <input type="number" name="idade" id="idade" value="2024">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $calcIdade = $anoAtual - $ano
        echo "Quem nasceu em $ano vai ter $calcIdade anos em $anoAtual!";
        ?>
    </section>
</body>
</html>