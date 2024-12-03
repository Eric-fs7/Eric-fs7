<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Turista</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Criar Conta</h2>
            <form id="login-form" method="POST" action="contcadastro.php">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <label for="confirmarsenha">Confirmar Senha:</label>
                <input type="password" id="confirmarsenha" name="csenha" required>
                
                <button type="submit">Cadastrar</button>
            </form>
            
            <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
        </div>
    </div>
</body>
</html>