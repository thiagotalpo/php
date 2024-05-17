<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" step="0.01">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $rquadrada = $num ** (1/2);
        $rcubica = $num ** (1/3);
        echo "Analisando o <strong>número $num</strong>, temos:";
        echo "<ul><li>A sua raiz quadrada é <strong>". number_format(float $rquadrada, ",", "") ."</strong><li>A sua raiz cúbica é <strong>". number_format(float $rcúbica, ",", "") ."</strong></ul>";
        
        ?>
    </section>
</body>
</html>