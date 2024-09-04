<!-- ***14 – Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra. -->

<?php

$valor_produto = 1000;
$porcento = $valor_produto * 0.16;

$valor_total = $valor_produto + $porcento;
$valor_parcelas = $valor_total / 10;

echo "O valor da parcela é ". $valor_parcelas . "\n";
echo "O valor total da compra é ". $valor_total . "\n";

?>