<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
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
    
    <form action="salvarDadosUsuario.php" method="POST">
        <h2>Cadastro de Usuário</h2>
        <label for="username">Nome:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for = "descricao">Descreva sua experiencia:</label>
        <input type = "text" id = "descricao" name = "descricao" required><br>
        
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
