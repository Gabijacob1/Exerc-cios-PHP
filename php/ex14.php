<?php
$idade = readline("Digite uma idade \n");
$salario = readline("Digite um valro de salário: \n");
$sexo = readline("Digite M [masculino] F [feminino] \n");

switch($sexo){
    case 'm':
    case 'M':
        if($idade < 30){
            $aumento = $salario * 0.15;
           break;
        }
        $aumento = $salario * 0.25;
    case 'f':
    case 'F':
        if($idade < 25){
            $aumento = $salario * 0.20;
         break;
        }
        $aumento = $salario * 0.25;
        break;

}
echo "Salario atual" . $salario . "\n";
echo "aumento" . $aumento . "\n";
echo "Novo salario: ". ($salario + $aumento ) . "\n"; 








