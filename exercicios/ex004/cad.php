<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>=Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"]; ?? "sem nome "
            $snome = $_GET["sobrenome"]; ?? "desconhecido"
            echo "<p>É um prazer te conhecer $nome $snome! </p>";       
        ?>
    </main>
</body>
</html>