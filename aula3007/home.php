<?php
// Receber dados do usuário
$usuario = $_POST['user'];
$senha = $_POST['password'];

if (($usuario != 'admin') || ($senha != 'admin')) {
    // Redirecionar para a página 404
    header('Location: 404.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Bem vindo</h1>
        </div>
    </header>
    <main class="container mx-auto py-8 flex-grow">
        <h2 class="text-xl font-semibold">Sr(a) <?= htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8') ?></h2>
    </main>
    <footer class="bg-blue-600 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; <?= date('Y') ?> Sua Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
