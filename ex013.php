<!-- ***13 – Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5. -->

<!-- 5*2 + 8*3 + 10*5 / 2 + 3 + 5 -->

<?php

$nota1 = 5;
$nota2 = 8;
$nota3 = 10;

$peso1 = 2;
$peso2 = 3;
$peso3 = 5;

$media = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);

echo "A média é " . $media;

?>