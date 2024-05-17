<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $preço = $_GET['preco'] ?? 1550.50;
    $preçoFormat = numfmt_format_currency($padrao, $preço, "BRL");
    $percentual = $_GET['percentual'] ?? 25;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">
            <label for="percentual">Qual será o percentual de reajuste?</label>
            <input type="range" name="percentual" id="percentual" min="0" max="200" step="1">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
        $calcPorcentagem = $preço * ($percentual/100);
        $calcReajuste = $preço + $calcPorcentagem;
        echo "O produto que custava <strong>$preçoFormat</strong>, com <strong>$percentual%</strong> de aumento vai passar a custar <strong>". numfmt_format_currency($padrao, $calcReajuste, "BRL") ."</strong>"  
        ?>
    </section>
</body>
</html>