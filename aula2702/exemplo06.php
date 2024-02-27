<?php
    $quantidade = 10;
    $salario = 5000;
    
    function calcularSalario(){
        global $quantidade;
        global $salario;
        $total = $quantidade * $salario;
        return $total;
    }
    
    $total = calcularSalario();
    echo "Após o cálculo: $total\n";
    //Primeiros slides do material 02.