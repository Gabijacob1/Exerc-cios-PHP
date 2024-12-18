<?php
function fibonacci($n1) {
    if ($n1 == 0) {
        return 0;
    } else if ($n1 == 1) {
        return 1;
    } else {
        return fibonacci($n1-1) + fibonacci($n1-2);
 }
}

$n1 = readline("Digite um número: ");

$resultado = fibonacci($n1);

echo "O " . $n1 . "º termo da sequência de Fibonacci é " . $resultado;

?>