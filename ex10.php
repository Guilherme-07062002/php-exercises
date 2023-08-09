<?php
// Faça um algoritmo que leia a largura e altura de uma parede, calcule e
// mostre a área a ser pintada e a quantidade de tinta necessária para o serviço,
// sabendo que cada litro de tinta pinta uma área de 2metros quadrados.

echo "Informe a largura: ";
$largura = floatval(fgets(STDIN));

echo "Informe a altura: ";
$altura = floatval(fgets(STDIN));

$area = $largura * $altura;
$quantLatas = $area / 2;

echo "\nSerão necessárias $quantLatas latas de tinta para pintar uma área de $area m². \n";
?>