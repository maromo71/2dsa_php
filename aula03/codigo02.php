<?php
    $valor = 500;
    function faz(){
        global $valor;
        $valor = $valor + 1;
        echo "$valor \n";
    }
    faz();
    echo "$valor \n";

