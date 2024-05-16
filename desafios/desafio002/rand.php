<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
        $min = 0
        $max = 100 
        $rnum = mt_rand($min, $max);
        echio "<p>Gerando um valor aleatório entre <em>$min</em> e <em>$max</em></p>";
        echo "<p>O valor gerado foi <strong>$rnum</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>
    </section>
</body>
</html>