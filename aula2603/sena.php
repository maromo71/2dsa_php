<?php
    $nums = [0,0,0,0,0,0];
    $cont = 0; //qtos numeros tenho no vetor
    while($cont < 6){
        $gerado = rand(1,60);
        $taLaDentro = false;
        for($i = 0; $i < $cont; $i++){
            if($nums[$i] == $gerado){
                $taLaDentro = true;
                break;
            }    
        }
        if(!$taLaDentro){
            $nums[$cont] = $gerado;
            $cont++;
        }
    }
    sort($nums);
    print_r($nums);
