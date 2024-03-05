<?php
    //escopo = alcance da variável
    $nome = "Rodrigo";

    function mostrarNome(){
        global $nome;
        $nome = "Junior";
        echo "O nome dentro da função é $nome \n";
    }

    mostrarNome();

    echo "Nome fora da função: $nome \n";
