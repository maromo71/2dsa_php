<?php
session_start();

require_once __DIR__ . '/../config/db.php';

if (!isset($conn)) {
    echo "Erro: conexão com o banco de dados não foi estabelecida.";
    exit();
}

// Recupera os dados enviados pelo formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

try {
    
    // Consulta SQL para verificar o usuário e senha
    $stmt = $conn->prepare("SELECT password FROM usuarios WHERE username = :username");
    $stmt->bindParam(':username', $usuario);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
       
        // Verifica a senha
        if (password_verify($senha, $result['password'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: ../public/index.php");
            exit();
        } else {
            header("Location: ../public/erro.html");
            exit();
        }
    } else {
        header("Location: ../public/erro.html");
        exit();
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
