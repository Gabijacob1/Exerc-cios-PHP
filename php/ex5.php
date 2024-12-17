<?php
    function inteiros($n){
        $count = $n;
        while($count>1){
            $n += ($count-1);
            $count--;
        }
        return $n;
    }
    echo inteiros(5);