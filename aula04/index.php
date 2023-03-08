<?php
    include_once("codigo01.php");
    $nomes = pegarNomes();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tabela de Professores</title>
</head>
<body>
    <div class="container">
        <h1>Professores</h1>
        <h2>Informática</h2>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td>Ordem</td>
                    <td>Professor</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($p=0; $p<count($nomes); $p++){
                        ?>
                        <tr>
                            <td>N. <?=$p+1?></td>
                            <td><?=$nomes[$p]?></td>
                        </tr>
                        <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>