<?php
// src/views/list.php
session_start();
if ($_SESSION['user'] == null) {
    header('Location: login.php');
}
require_once __DIR__ . '/../src/controllers/ProductController.php';
$controller = new ProductController();
$products = $controller->listProducts();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="create.php">Adicionar Novo Produto</a>
    <a href="logout.php">Efetuar Logout</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product['id']) ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['description']) ?></td>
                <td><?= htmlspecialchars($product['price']) ?></td>
                <td>
                    <a href="edit.php?id=<?= htmlspecialchars($product['id']) ?>">Editar</a>
                    <a href="delete.php?id=<?= htmlspecialchars($product['id']) ?>" 
                    onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                    Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>


