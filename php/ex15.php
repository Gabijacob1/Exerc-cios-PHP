<?php
$idade = readline("Digite uma idade \n");
$salario = readline("Digite um valro de salário: \n");
$sexo = readline("Digite M [masculino] F [feminino] \n");

if(($sexo == 'm' || sexo == 'M' ) and ($idade < 30) ){
    
}else { 
    if (($sexo == 'f'|| $sexo == 'F' ) and ($idade < 25)){
        $aumento = $salario * 0.20; 
    }else { 
        $aumento = $salario * 0.25; 
    }
}

echo "Salario atual" . $salario . "\n";
echo "aumento" . $aumento . "\n";
echo "Novo salario: ". ($salario + $aumento ) . "\n"; 




