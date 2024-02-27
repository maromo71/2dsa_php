<?php
    date_default_timezone_set('Brazil/East');
    $dataDeHoje = date("d/m/y", time());
    $hotaAtual = date("h:i", time());
    echo "Hoje é $dataDeHoje e agora são: \n";
    echo "$hotaAtual. Seja bem vindo.\n";