<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Amigos</title>
</head>
<body>
    <h1>Agenda de Amigos</h1>
    <form action="receba.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <p></p>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <p></p>

        <label for="fone">Telefone:</label>
        <input type="tel" name="fone" id="fone">
        <p></p>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">

    </form>
</body>
</html>