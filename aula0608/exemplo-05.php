<?php
    require_once "exemplo-01.php";

    var_dump($_SESSION);
    echo "<br>";
 
    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "Sessão desabilitada";
            break;
        case PHP_SESSION_NONE:
            echo "Sessão habilitada, mas não iniciada";
            break;
        case PHP_SESSION_ACTIVE:
            echo "Sessão habilitada e iniciada";
    }