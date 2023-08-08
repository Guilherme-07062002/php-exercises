<?php
// Crie um programa que leia o nome e o salário de um funcionário, mostrando no
// final uma mensagem.
// Ex:
// Nome do Funcionário: Maria do Carmo
// Salário: 1850,45
// O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho.

echo "Informe o seu nome: ";
$nome = fgets(STDIN);

echo "Informe o seu salário: ";
$salario = fgets(STDIN);

echo "O funcionário $nome recebe um salário de R$" . number_format($salario, 2, ',', '.') . "\n";
?>