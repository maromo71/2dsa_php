<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantina da Etec</title>
</head>
<body>
    <h1>Cantina da Etec</h1>
    <h2>Cadastro de Produtos</h2>
    <form action="receba.php" method="post">
        <!-- Aqui vai seu formulário -->
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao">
        <p></p>

        <label for="quantidade">Quantidade: </label>
        <input type="number" name="quantidade" id="quantidade">
        <p></p>

        <label for="valor">Valor: </label>
        <input type="text" name="valor" id="valor">
        <p></p>

        <label for="descontinuado">Descontinuado ?</label>
        <input type="checkbox" name="descontinuado" id="descontinuado" value="1">
        <p></p>

        <label for="tipo">Tipo de Produto: </label>
        <select name="tipo" id="tipo">
            <option value="1">Perecível</option>
            <option value="2">Líquido</option>
            <option value="3">Outro</option>
        </select>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>