 <?php
    function Potência($base, $expoente){
        $resultado = 1;
        for($i = 0; $i < $expoente; $i++){
            $resultado *= $base;

        }
       echo $resultado;

    }
    $base = 2;
    $expoente = 5;
    Potência( $base,  $expoente);
