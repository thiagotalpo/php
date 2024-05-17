<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13</title>
    <style>
        img.nota {
            height: 60px;
        }
    </style>
</head>
<body>
    <?php 
    $din = $_GET['din'] ?? 385;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="din">Qual valor deseja sacar? (R$)</label>
            <input type="number" name="din" id="din" step="5" required value="<?=$din?>">
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $saque = $din;
        $resto = $saque;
        //Saque de 100
        $tot100 = (int)($resto/100);
        $resto %= 100;
        //Saque de 50
        $tot50 = (int)($resto/50);
        $resto %= 50;
        //Saque de 10
        $tot10 = (int)($resto/10);
        $resto %= 10;
        //Saque de 5
        $tot5 = (int)($resto/5);
        $resto %= 5;
        echo "Seu saque de R\$$saque vai resultar em:$tot100 notas de 100, $tot50 notas de 50, $tot10 notas de 10 e $tot5 notas de 5. Faltou $resto reais para sacar"
    ?>
    <section>
        <h2>O Resultado do saque de R$<?=number_format($din, 2, ",", ".")?> realizado</h2>
        <p>Você irá receber as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota"> x<?$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota"> x<?$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota"> x<?$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota"> x<?$tot5?></li>
        </ul>
    </section>
    
</body>
</html>