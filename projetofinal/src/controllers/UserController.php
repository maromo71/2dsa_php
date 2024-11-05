<?php
// src/controllers/ProductController.php

require_once __DIR__ . '/../models/User.php';

class UserController
{
   
    public function login($username, $password)
    {
        return User::getByUsername($username, $password);
    }

    public function logout()
    {
        session_start();
        $_SESSION["user"] = null;
        session_destroy();
    }
}
