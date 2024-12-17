<?php
    function invertido($string){
        $i = strlen($string) - 1 ;
        while ($i >= 0) {
          echo $string[$i];
          $i--;
        }
    }
    $texto = "Ame o poema";
    invertido($texto);
