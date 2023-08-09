<?php
// Desenvolva um algoritmo que leia dois números inteiros e mostre o somatório
// entre eles.

echo "Informe um número: ";
$num1 = intval(fgets(STDIN));

echo "Informe outro número: ";
$num2 = intval(fgets(STDIN));

echo "$num1 + $num2 = " . $num1 + $num2 . "\n";
?>