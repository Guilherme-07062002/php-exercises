<?php
// Crie um algoritmo que leia um número real e mostre na tela o seu dobro e a
// sua terça parte.

echo "Informe um número: ";
$num = floatval(fgets(STDIN));

echo "O seu dobro é " . ($num * 2) . "\nSua terça parte é " . ($num / 3) . "\n";
?>