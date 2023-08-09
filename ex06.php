<?php
// Faça um programa que leia um número inteiro e mostre o seu antecessor e seu
// sucessor.

echo "Informe um número inteiro: ";
$num = intval(fgets(STDIN));

echo "Antecessor: " . ($num - 1) . "\nSucessor: " . ($num + 1) . "\n";
?>