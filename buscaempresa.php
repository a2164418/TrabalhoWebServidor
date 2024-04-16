//<?php
if(!isset($_SESSION['logado'])){
    header("Location: index.php");
    exit(); 
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Empresas</title>
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
    
    <form action="formularios.php" method="GET">
        <h2>Buscar Empresas</h2>
        <label for="area_interesse">Área de Interesse:</label><br>
        <input type="text" id="area_interesse" name="area_interesse" required><br><br>
        
        <label for="localizacao">Localização:</label><br>
        <input type="text" id="localizacao" name="localizacao"><br><br>
        
        
        
        <input type="submit" value="Buscar"><br>
        
    </form>

    <form action= "logout.php" method = "GET">

        <input type = "submit" value = "logout"> <br>

    </form>
    <form action = "VerificaEmpresas.php" method = "GET">
        <input type = "submit" value = "Verificar todas empresas"> <br>
    </form>

</body>
</html>
