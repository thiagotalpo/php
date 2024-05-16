<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas</h1>
        <?php
        //$wallet = 245.45;
        $cot = 5.13;
        $wallet = $_GET["num"] ?? 0;
        $conv = round(($wallet / $cot), 2);
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        //echo "Seus R\$" . number_format($wallet, 2, ",", ".") . " equivalem a US\$". number_format($conv,2, ",", ".");
        echo "<p>Seus " . numfmt_format_currency($padrao, $wallet, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $conv, "USD") . "<strong> </p>";
        echo "*<p><strong>Cotação fixa de $cot</strong> informada diretamente no código</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>