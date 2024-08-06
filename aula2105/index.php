<!DOCTYPE html>
<html lang="pt-br">
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>Formulário de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!-- Formulário de Cadastro -->
                <h2>Cadastro de Produto</h2>
                <form action="processar_produto.php" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="product-name">Nome do Produto:</label>
                        <input type="text" class="form-control" id="product-name" name="product-name" required>
                    </div>
                    <div class="form-group">
                        <label for="product-description">Descrição:</label>
                        <textarea class="form-control" id="product-description" name="product-description" rows="4"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product-price">Preço:</label>
                        <input type="number" class="form-control" id="product-price" name="product-price" step="0.01"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="product-category">Categoria:</label>
                        <select class="form-control" id="product-category" name="product-category" required>
                            <option value="">Selecione uma categoria</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="roupas">Roupas</option>
                            <option value="casa">Casa</option>
                            <option value="beleza">Beleza</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product-stock">Quantidade em Estoque:</label>
                        <input type="number" class="form-control" id="product-stock" name="product-stock" required>
                    </div>
                    <div class="form-group">
                        <label for="product-date">Data de Fabricação:</label>
                        <input type="date" class="form-control" id="product-date" name="product-date" required>
                    </div>
                    <div class="form-group">
                        <label for="product-image">Imagem do Produto:</label>
                        <input type="file" class="form-control-file" id="product-image" name="product-image" required>
                    </div>
                    <div class="form-group">
                        <label for="supplier-email">Email do Fornecedor:</label>
                        <input type="email" class="form-control" id="supplier-email" name="supplier-email" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="product-available" name="product-available">
                        <label class="form-check-label" for="product-available">Produto Disponível</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Produto</button>

                </form>
            </div>
            <div class="col-md-2"></div>

        </div>
        <!-- Lista de Produtos -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3 class="mt-5">Produtos Cadastrados</h3>
                <ul class="list-group">
                    <?php
                    
                    if (isset($_SESSION['products'])) {
                        foreach ($_SESSION['products'] as $product) {
                            echo '<li class="list-group-item">';
                            echo '<strong>Nome:</strong> ' . htmlspecialchars($product['name']) . '<br>';
                            echo '<strong>Descrição:</strong> ' . htmlspecialchars($product['description']) . '<br>';
                            echo '<strong>Preço:</strong> ' . htmlspecialchars($product['price']) . '<br>';
                            echo '<strong>Categoria:</strong> ' . htmlspecialchars($product['category']) . '<br>';
                            echo '<strong>Quantidade:</strong> ' . htmlspecialchars($product['stock']) . '<br>';
                            echo '<strong>Data de Fabricação:</strong> ' . htmlspecialchars($product['date']) . '<br>';
                            echo '<strong>Email do Fornecedor:</strong> ' . htmlspecialchars($product['email']) . '<br>';
                            echo '<strong>Disponível:</strong> ' . ($product['available'] ? 'Sim' : 'Não') . '<br>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>