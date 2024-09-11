<?php
// src/models/Product.php

require_once __DIR__ . '/../databases/Connection.php';

class Product
{
    public static function getAll()
    {
        $db = Connection::getConnection();
        $stmt = $db->query('SELECT * FROM products');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = Connection::getConnection();
        $stmt = $db->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $db = Connection::getConnection();
        $stmt = $db->prepare('INSERT INTO products (name, description, price) 
        VALUES (:name, :description, :price)');
        $stmt->execute([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price']
        ]);
    }

    public static function update($id, $data)
    {
        $db = Connection::getConnection();
        $stmt = $db->prepare('UPDATE products SET name = :name, 
        description = :description, price = :price WHERE id = :id');
        $stmt->execute([
            'id' => $id,
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price']
        ]);
    }

    public static function delete($id)
    {
        $db = Connection::getConnection();
        $stmt = $db->prepare('DELETE FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }
}