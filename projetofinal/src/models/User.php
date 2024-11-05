<?php
// src/models/Product.php

require_once __DIR__ . '/../databases/Connection.php';

class User
{
    public static function getAll()
    {
        $db = Connection::getConnection();
        $stmt = $db->query('SELECT * FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByUsername($username, $password)
    {
        $db = Connection::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username and 
        password = :password');
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}