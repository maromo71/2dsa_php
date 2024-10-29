<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        echo "<h1>Bem-vindo, " . htmlspecialchars($_SESSION['usuario']) . "!</h1>";
    } else {
        header("Location: login.html");
        exit();
    }
    ?>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>
