<?php
require_once __DIR__ . '/../src/controllers/UserController.php';

$controller = new UserController();
$username = $_POST['username'];
$password = $_POST['password'];
$user = $controller->login($username, $password);

if ($user) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: list.php');
} else {
    header('Location: login.php');
}