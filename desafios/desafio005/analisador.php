<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
        //$num = 7469.254;
        $num = number_format(float $_GET["rnum"], "3", ",", ".");
        $inteiro = number_format($num, "0", "", "."); // ou (int) $num;
        $_inteiro = number_format($num, "0", "", "");
        $decimal = number_format(round(($num - $_inteiro), 3), "3", ",", "");
        echo "<p>Analisando o número <strong>$num</strong> informado pelo usuário:</p>";
        echo "<ul><li>A parte <em>inteira</em> do número é $inteiro<li>A parte <em>fracionária</em> do número é $decimal</ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>