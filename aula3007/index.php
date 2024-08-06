<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Acesso ao sistema</h1>
        </div>
    </header>
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Acesso ao sistema</h2>
            <form action="home.php" method="post" class="space-y-4">
                <div>
                    <label for="user" class="block text-sm font-medium text-gray-700">Usuário:</label>
                    <input type="text" name="user" id="user" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha:</label>
                    <input type="password" name="password" id="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="text-center">
                    <input type="submit" value="Entrar" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                </div>
            </form>
        </div>
    </main>
    <footer class="bg-blue-600 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; <?= date('Y') ?> Sua Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
