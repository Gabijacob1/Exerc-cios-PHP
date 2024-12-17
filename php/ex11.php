<?php
    function Menor_divisor($n){
        $resultado = 2;
        while ($n % $resultado != 0){
            $divisor++;
        }
          return $resultado;
    }
    $n = 42;
    $final = Menor_divisor($n);
    echo "O menor divisor de $n é: $final";
           
