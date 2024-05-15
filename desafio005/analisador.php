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
        $inteiro = number_format($num, "0", "", ".");
        $_inteiro = number_format($num, "0", "", "");
        $decimal = number_format(round(($num - $_inteiro), 3), "3", ",", "");
        echo "<p>Analisando o número $num informado pelo usuário:</p>";
        echo "<ul><li>A parte inteira do número é $inteiro<li>A parte fracionária do número é $decimal</ul>";
        ?>
    </section>
</body>
</html>