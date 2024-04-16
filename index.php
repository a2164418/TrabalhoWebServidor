<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medaemprego</title>
    <style>
        h2{
            text-align: center;
            margin-top: 20px;

        }
        div{background-color: black;
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
    
    <form action = "formularioPrincipal.php" method = "post">
        <div>
            <h2>Login</h2>
            <label>Usuário</label>
            <input type="text" name="username">
            <br></br>
            <label>Senha</label>
            <input type="password" name="password">
            <br></br>
            <br><br>
            <input type="radio" id="empresa" name="tipo" value="empresa">
            <label for="empresa">Empresa</label>
            <input type="radio" id="candidato" name="tipo" value="candidato">
            <label for="candidato">Candidato</label>
            <br><br>
            <input type="submit"name = "login" value="Login">
            <input type ="submit"name = "cadastro" value = "Cadastro">
        </div>
    </form>
</body>
</html>