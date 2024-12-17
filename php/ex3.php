<?php
    function fatorial($n){
        $count = $n;
        while($n>1){
            $n *= ($count-1);
            $count--;
        }
        return $n;
    }
    echo fatorial(5);