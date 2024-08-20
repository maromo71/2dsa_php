<?php
    // index.php - que acessa o banco e exibe os dados de uma 
    // tabela (alunos) do banco (escola)
    require_once __DIR__ . '/config/config.php';
    //preparando a consulta
    $sql = "SELECT * FROM tbAlunos";
    //preparando a consulta
    $stmt = $conn->prepare($sql);
    //executando a consulta
    $stmt->execute();
    //pegando os dados da consulta
    $alunos = $stmt->fetchAll();
    //mostrando os dados format json
    //echo json_encode($alunos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos alunos</title>
</head>
<body>
    <h1>Dados dos alunos</h1>
    <h2>Matriculados</h2>
    <table>
        <tr>
            <th>RM</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
            foreach ($alunos as $aluno) {
                echo "<tr>";
                echo "<td>" . $aluno['rm'] . "</td>";
                echo "<td>" . $aluno['nome'] . "</td>";
                echo "<td>" . $aluno['email'] . "</td>";
                echo "</tr>";
            }
        ?>
        </table>
</body>
</html>


