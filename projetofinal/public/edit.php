<?php
// src/views/edit.php

require_once __DIR__ . '/../src/controllers/ProductController.php';

$controller = new ProductController();

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$product = $controller->viewProduct($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->editProduct($_GET['id'], $_POST);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="edit.php?id=<?= htmlspecialchars($product['id']) ?>" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
        <br>
        <label for="description">Descrição:</label>
        <textarea id="description" name="description"><?= htmlspecialchars($product['description']) ?></textarea>
        <br>
        <label for="price">Preço:</label>
        <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price']) ?>" 
        required>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="index.php">Voltar à lista</a>
</body>
</html>

