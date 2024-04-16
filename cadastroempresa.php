<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresa</title>
    <style>
            form{
            background-color: black;
            position: absolute;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius:15px;



        }
    </style>
</head>
<body>
    <h2>Cadastro de Empresa</h2>
    <form action="salvarDadosEmpresa.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="nome_empresa">Nome da Empresa:</label><br>
        <input type="text" id="nome_empresa" name="nome_empresa" required><br><br>
        
        <label for="cnpj">CNPJ:</label><br>
        <input type="text" id="cnpj" name="cnpj" required><br><br>
        
        <label for="endereco">Endereço:</label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>
        
        <label for = "descricao">Descreva sua empresa:</label>
        <input type = "text" id = "descricao" name = "descricao" required>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
