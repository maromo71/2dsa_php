<?php
// public/delete.php

require_once __DIR__ . '/../src/controllers/ProductController.php';

if (isset($_GET['id'])) {
    $controller = new ProductController();
    $controller->deleteProduct($_GET['id']);
}

header('Location: index.php');
exit;
