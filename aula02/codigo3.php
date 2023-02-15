<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Código 3</title>
</head>
<body>
    <h1>Cidade e Estado</h1>
    <?php
        $cidade = $_POST["txtCidade"];
        $estado = $_POST["txtEstado"];
    ?>
    <p>A Etec fica em <?=$cidade?> no estado de <?=$estado?></p>
</body>
</html>