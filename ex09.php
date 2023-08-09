<?php
// Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$)
// e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45.

echo "Informe a quantia em reais: ";
$quant = floatval(fgets(STDIN));

echo "\nR$" . number_format($quant, 2, ',', '.') .
    " convertido para dolar é: " .
    "$" . number_format(($quant / 3.45), 2, ',', '.') . "\n";
?>