<?php
// src/views/create.php

require_once __DIR__ . '/../src/controllers/ProductController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ProductController();
    $controller->createProduct($_POST);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Produto</title>
</head>
<body>
    <h1>Criar Novo Produto</h1>
    <form action="create.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Descrição:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <label for="price">Preço:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>
        <button type="submit">Criar</button>
    </form>
    <a href="index.php">Voltar à lista</a>
</body>
</html>


