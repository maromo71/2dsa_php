<?php
    $dicionario = [
        "blue" => "azul",
        "yellow" => "amarelo",
        "green" => "verde",
        "white" => "branco",
        "black" => "preto"
    ];
    foreach($dicionario as $cadaumquetanovetor){
        echo $$cadaumquetanovetor . "\n";
    }
    foreach($dicionario as $x => $y){
        echo "A palavra $x em português é: $y \n";
    }