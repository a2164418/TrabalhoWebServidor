<?php
session_start();

if (isset($_SESSION['empresa']) && !empty($_SESSION['empresa'])) {
    $empresas = $_SESSION['empresa'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Empresas</h2>

<table>
    <tr>
        <th>Nome da Empresa</th>
        <th>CNPJ</th>
        <th>Endereço</th>
        <th>Descrição</th>
    </tr>
    <?php

    foreach ($empresas as $empresa) {
        echo "<tr>";
        echo "<td>{$empresa['nome_empresa']}</td>";
        echo "<td>{$empresa['cnpj']}</td>";
        echo "<td>{$empresa['endereco']}</td>";
        echo "<td>{$empresa['descricao']}</td>";
        echo "</tr>";
    }
    ?>
</table>
<form action = "buscaempresa.php" method = "GET">
        <input type = "submit" value = "Voltar"> <br>
    </form>

</body>
</html>
<?php
} else {
    echo "Nenhuma empresa cadastrada ainda.";
}
?>
