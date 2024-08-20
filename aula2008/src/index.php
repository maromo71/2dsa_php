<?php
    // index.php - que acessa o banco e exibe os dados de uma 
    // tabela (alunos) do banco (escola)
    require_once __DIR__ . '/config/config.php';
    //preparando a consulta
    $sql = "SELECT * FROM tbAlunos";
    //preparando a consulta
    $stmt = $conn->prepare($sql);
    //executando a consulta
    $stmt->execute();
    //pegando os dados da consulta
    $alunos = $stmt->fetchAll();
    //mostrando os dados format json
    echo json_encode($alunos);


