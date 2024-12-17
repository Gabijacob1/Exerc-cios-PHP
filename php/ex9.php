<?php
function Soma_digitos($n) {
    $resultado = 0;
    while ($n != 0) {
        $i = $n % 10;
        $resultado += $i;
        $n = (int)($n / 10);
    }
    return $resultado;
}
$n2 = 235;
$resultado = Soma_digitos($n);
echo $resultado;