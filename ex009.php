<!-- 9 – Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto. -->

<?php

$value = 500;
$desconto = $value * 0.07;
$totaldesc = $value - $desconto;

echo "O valor original é \n" . $value;
echo "O desconto deste valor é \n" . $desconto;
echo "O valor com desconto é  \n" . $totaldesc;
?>