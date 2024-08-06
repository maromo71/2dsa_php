<?php
    require_once "exemplo-01.php";

    echo "Número único da sessão: " . session_id();
    echo "<br>";
    var_dump($_SESSION);
    
    echo "<br>";
    $status_atual = session_status();
    echo $status_atual . "<br>";

    session_regenerate_id();
    echo "<br>Novo número da sessão: " . session_id();

