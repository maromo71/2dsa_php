<?php
    //receber os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    //mostrando os dados no navegador
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Dados da Pessoa</h1>
    <h2>Recebido do Formulário</h2>
    <p>Nome: <?=$nome ?></p>
    <p>E-mail: <?=$email ?></p>
    <p>Fone: <?=$fone ?></p>
</body>
</html>
