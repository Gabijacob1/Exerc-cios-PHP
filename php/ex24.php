<?php
$sum = 0;
echo "Digite uma sequência de 5 números:\n";
for ($i = 1; $i <= 5; $i++) {
    $num = readline("Número {$i}: ");
    $sum += $num;
}
$avg = $sum / 5;
echo "A média dos números é: {$avg}\n";
?>
