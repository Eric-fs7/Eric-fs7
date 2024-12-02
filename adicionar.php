<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Local</title>
    <link rel="stylesheet" href="adicionar.css">
</head>
<body>
    <h1>Adicionar Hotel</h1>
    <form id="formulario_hotel" action="adicionar_local.php" method="POST" enctype="multipart/form-data">
        <label for="nome_hotel">Nome do Hotel:</label>
        <input type="text" id="nome_hotel" name="nome_hotel" placeholder="Insira o nome do hotel" required>
        <br>
        
        <label for="localizacao">Localização:</label>
        <input type="text" id="localizacao" name="localizacao" placeholder="Insira a localização do local" required>
        <br>
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="Insira o número de telefone" required>
        <br>

        <label for="imagem_hotel">Imagem do local:</label>
        <input type="file" id="imagem_hotel" name="imagem_hotel" accept="image/*" required>
        <br>
        
        <br>
        <button type="submit">Adicionar Hotel</button>
    </form>
</body>
</html>