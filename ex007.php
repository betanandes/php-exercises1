<!-- 7 – Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário. -->

<?php

$peso = 80;
$altura = 1.70;

$alt = $altura * $altura;
$imc = $peso / $alt;

echo "O seu IMC é " . $imc;
?>