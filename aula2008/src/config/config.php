<?php
    //configuração com o banco de dados
    $user = 'root';
    $password = ''; //aluno123
    //criando conexao com o banco de dados
    try{
        //estabelecer conexao 
        $conn = new PDO('mysql:host=localhost;dbname=escola', 
            $user, 
            $password);
        //definir o modo de erro
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //definir o modo de caracteres
        $conn->exec("set names utf8");
    }catch(PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }