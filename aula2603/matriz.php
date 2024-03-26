<?php
    $matriz = [
        [0,0,0,0],
        [0,0,0,0],
        [0,0,0,0],
        [0,0,0,0]
    ];
    for($i =0; $i < 4; $i++) { //percorrer a linha
        for($j = 0; $j < 4; $j++){ //percorrer a coluna
            echo "[" . $matriz[$i][$j]  ."]";
        }
        echo "\n";
    }
    //logica para criar a matriz triangular superior
    for($i =0; $i < 4; $i++) { //percorrer a linha
        for($j = 0; $j < 4; $j++){ //percorrer a coluna
            if($j >= $i){
                $matriz[$i][$j] = rand(1,9);
            }
        }
    }
    echo "\nSuperior agora\n";
    for($i =0; $i < 4; $i++) { //percorrer a linha
        for($j = 0; $j < 4; $j++){ //percorrer a coluna
            echo "[" . $matriz[$i][$j]  ."]";
        }
        echo "\n";
    }
