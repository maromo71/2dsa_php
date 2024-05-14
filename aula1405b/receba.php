<?php
    //recebendo dados do formulário
    $descricao = $_POST["descricao"];
    $quantidade = $_POST["quantidade"];
    $str_valor = $_POST["valor"];
    if(isset($_POST["descontinuado"])){
        $descontinuado = 1;
    }
   
    $str_valor = str_replace(",",".",$str_valor);
    //convertendo o valor para float
    $valor = floatval($str_valor);
    
    $tipo = $_POST["tipo"];
    if($tipo==1){
        $tipo = "Perecível";
    }elseif($tipo==2){
        $tipo = "Líquido";
    }else{
        $tipo = "Outro";
    }
    //apresentando dados no navegador
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos Produtos</title>
</head>
<body>
    <h1>Dados Enviados do Formulário</h1>
    <h2>Produto na Etec</h2>
    <p>Descrição: <?=$descricao?></p>
    <p>Quantidade: <?=$quantidade?></p>
    <p>Valor: <?=$valor?></p>
    <?php
        echo "Total em Reais R$ " . ($valor * $quantidade);
    ?>
    <p>Descontinuado: 
        <?php if(isset($_POST["descontinuado"])) {
            echo "Produto descontinuado do nosso estoque <br>"; 
        }else{
            echo "Produto ativo no estoque<br>";
        }?>
    </p>
    <p>Tipo de Produto: <?=$tipo?></p>

</body>
</html>