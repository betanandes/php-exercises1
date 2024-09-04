<!-- ***6 – Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h. -->

<?php
// Leitura da velocidade em m/s
$velocidade_ms = 10; // Exemplo: 10 m/s

// Conversão para km/h (1 m/s = 3.6 km/h)
$velocidade_kmh = $velocidade_ms * 3.6;

// Exibe o resultado
echo "A velocidade de " . $velocidade_ms . " m/s é equivalente a " . $velocidade_kmh . " km/h";
?>