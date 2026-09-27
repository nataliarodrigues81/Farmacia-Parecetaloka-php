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

<link rel="stylesheet" href="style.css">

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
    <a href = "index.html">Voltar</a>
</div>