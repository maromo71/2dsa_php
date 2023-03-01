<?php
    function converterMaiusculo($texto){
        $novo_texto = strtoupper($texto);
        return $novo_texto;
    }
    $palavra = "maria da silva santos";
    echo "Palavra: $palavra \n";
    $palavra = converterMaiusculo($palavra);
    echo "Palavra: $palavra \n";
    
 