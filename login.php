<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Empresa de Turismo</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']);
            }
            ?>
            <form id="login-form" action="contlogin.php" method="post">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <button type="submit">Entrar</button>
            </form>
            <p>Não tem conta? <a href="criarconta.php">Crie uma conta</a></p>
        </div>
    </div>
</body>
</html>