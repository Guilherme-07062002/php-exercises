<?php
//  Desenvolva um programa que leia uma distância em metros e mostre os valores
//  relativos em outras medidas.

echo "Informe uma distância em metros: ";
$metros = floatval(fgets(STDIN));

echo "A distância de $metros metros equivale á:\n"
    . ($metros / 10) . " decâmetro(s)\n"
    . ($metros / 100) . " centímetro(s)\n"
    . ($metros / 1000) . " milimetro(s)\n";
?>