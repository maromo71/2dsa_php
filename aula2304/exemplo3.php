<?php
    $agenda = [
        [
            "nome"=>"Rodrigo",
            "whatsapp"=> "19-9999-8888"
        ],
        [
            "nome"=>"Maromo",
            "whatsapp"=> "19-8888-8888"
        ],
        [
            "nome"=>"Tereza",
            "whatsapp"=> "19-7777-8888"
        ]
    ];
    foreach($agenda as $professor){
        echo $professor["nome"] . 
        " seu numero é " . $professor["whatsapp"] . "\n"; 
    }
