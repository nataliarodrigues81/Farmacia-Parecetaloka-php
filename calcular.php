<?php

$nome = $_POST['nome'];
$total = (float) $_POST['total'];
$idade = (int) $_POST['idade'];
$desconto = 0;

if (isset($_POST['cartao']))
{
    $cartao = "sim";
    $desconto = $desconto + 5;
}
else
{
    $cartao = "não";
    $desconto = $desconto + 0;
}

if ($idade == 0)
{
    $desconto = $desconto + 0;
}

if ($idade == 1)
{
    $desconto = $desconto + 5;
}

if ($idade == 2)
{
    $desconto = $desconto + 7;
}

$valordesconto = $total * $desconto / 100;
$totalfinal = $total - $valordesconto;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Farmácia Parecetaloka</title>
</head>
<body>

<h1>Farmácia Parecetaloka</h1>

<div class="resultado">
    <?php
    echo "Nome: $nome <br>";
    echo "Total do pedido: R$ " . number_format($total, 2, ',', '.') . "<br>";
    echo "Cartão fidelidade: $cartao <br>";
    echo "Desconto: $desconto% <br>";
    echo "Valor do desconto: R$ " . number_format($valordesconto, 2, ',', '.') . "<br>";
    echo "Total final: R$ " . number_format($totalfinal, 2, ',', '.');
    ?>
    <br>
    <a href="index.html">Voltar</a>

    <!-- usando for -->
    
    <h3>Opções de Parcelamento:</h3>
    <?php 
    
    for ($i = 1; $i <= 6; $i++) {
        $valorParcela = $totalfinal / $i;
        echo "{$i}x de R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
    }
    
    ?>
    

    <!-- usando while -->
     <!--
    <h3>Opções de Parcelamento:</h3>
    <?php 
    /*
    $j = 1;
    while ($j <= 6) {
        $valorParcela = $totalfinal / $j;
        echo "{$j}x de R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
        $j++;
    }
    */
    ?>
    -->
</div>

</body>
</html>