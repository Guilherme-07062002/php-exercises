<?php
// Faça um programa que leia as duas notas de um aluno em uma matéria e mostre
// na tela a sua média na disciplina.

echo "Informe a primeira nota: ";
$nota1 = floatval(fgets(STDIN));

echo "Informe a segunda nota: ";
$nota2 = floatval(fgets(STDIN));

$media = ($nota1 + $nota2) / 2;
echo "A média do aluno foi $media\n";

?>