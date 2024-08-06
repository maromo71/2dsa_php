<?php
    require_once "exemplo-01.php";

    echo "Valor da variável de sessão escola: " . $_SESSION['escola'];

    session_unset();

    echo "Valor da variável de sessão escola: " . $_SESSION['escola'];

