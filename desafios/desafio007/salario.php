<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 07</title>
</head>
<body>
    <?php 
    $salario = $_POST['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
        </form>
        <p>Considerando o salário mínimo de <strong>R$1.412,00</strong></p>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
        $_salario = $;
        $restoSalario = ;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);



        ?>
    </section>
</body>
</html>