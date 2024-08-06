<?php
session_start();

// Verifica se a sessão 'products' está inicializada, caso contrário, inicializa.
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
    
}

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = [
        'name' => $_POST['product-name'],
        'description' => $_POST['product-description'],
        'price' => $_POST['product-price'],
        'category' => $_POST['product-category'],
        'stock' => $_POST['product-stock'],
        'date' => $_POST['product-date'],
        'email' => $_POST['supplier-email'],
        'available' => isset($_POST['product-available']) ? true : false
    ];
    

    // Armazena o produto na sessão
    $_SESSION['products'][] = $product;
}

// Redireciona de volta para a página do formulário
header('Location: index.php');
exit;