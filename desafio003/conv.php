<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
</head>
<body>
    <section>
        <h1>Conversor de Moedas</h1>
        <?php
        //$wallet = 245.45;
        //$cot = 5.13;
        $wallet = $_GET["num"];
        $conv = round(($wallet / $cot), 2);
        echo "Seus R$$wallet equivalem a US$$conv";
        echo "*<p><strong>Cotação fixa de R$5,13</strong> informada diretamente no código</p>";
        ?>
    </section>
</body>
</html>