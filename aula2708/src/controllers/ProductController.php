<?php
// src/controllers/ProductController.php

require_once __DIR__ . '/../models/Product.php';

class ProductController
{
    public function listProducts()
    {
        return Product::getAll();
    }

    public function viewProduct($id)
    {
        return Product::getById($id);
    }

    public function createProduct($data)
    {
        Product::create($data);
    }

    public function editProduct($id, $data)
    {
        Product::update($id, $data);
    }

    public function deleteProduct($id)
    {
        Product::delete($id);
    }
}
