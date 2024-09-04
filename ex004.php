<!-- 4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor. -->

<?php

$value1 = 20;
$value2 = 40;
$value3 = 60;

$soma = $value1 + $value2 + $value3;
$porcentagem1 = $soma * 0.05;
$porcentagem2 = $soma * 0.50;

echo "5%  deste valor é \n" . $porcentagem1;
echo "50%  deste valor é " . $porcentagem2;
?>
