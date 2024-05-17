<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num1 = $_GET['v1'] ?? 2;
    $num2 = $_GET['v2'] ?? 2;
    $peso1 = $_GET['p1'] ?? 2;
    $peso2 = $_GET['p2'] ?? 1;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
        $mediaSimples = ($num1+$num2)/2;
        $mediaPonderada = ($num1+$num2)/($peso1+$peso2);
        echo "Analisando os valores $num1 e $num2:";
        echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". round($mediaSimples,2) .".<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". round($mediaPonderada,2) .".</ul>";
        ?>
    </section>
</body>
</html>