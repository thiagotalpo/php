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
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <form action="rand.php">
            <input type="button" value="🔄 Gerar Outro">
        </form>
    </section>
    <?php 
    $rnum = rand(0, 100);
    echo "O valor gerado foi <strong>$rnum</strong>"
    ?>
</body>
</html>