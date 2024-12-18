<?php

$sum = 0;

for ($i = 1; $i <= 5; $i++) {
    $num = readline("Digite o $i número: ");
    $sum += $num;
}


$total = $sum / 5;

echo "A média dos números é: {$total}";

?>