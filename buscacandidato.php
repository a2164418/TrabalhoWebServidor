
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Candidatos</title>
</head>
<body>
    <h2>Buscar Candidatos</h2>
    <form action="formularios.php" method="GET">
        <label for="area_interesse">Área de Interesse:</label><br>
        <input type="text" id="area_interesse" name="area_interesse" required><br><br>
        
        <label for="experiencia_minima">Experiência Mínima (anos):</label><br>
        <input type="number" id="experiencia_minima" name="experiencia_minima" min="0"><br><br>
        
        <input type="submit" value="Buscar">
    </form>
    <form method="post" action="logout.php">
    <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
