<?php
// Incluir o arquivo de conexão
include 'conectar.php';
session_start(); // Inicie a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['emaileuser']; // Campo que pode ser email ou username
    $senha = $_POST['senha']; // Campo para senha

    // Validação básica
    if (empty($login) || empty($senha)) {
        $_SESSION['error'] = "Por favor, preencha todos os campos.";
        header("Location: login.php");
        exit();
    }


    $login = mysqli_real_escape_string($conn, $login);
    $senha = mysqli_real_escape_string($conn, $senha);

    $query = "SELECT * FROM usuarios WHERE (email='$login' OR nome='$login') AND senha='$senha'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['nome_usuario'] = $row['nome'];
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Email ou senha incorretos.";
        header("Location: login.php");
        exit();
    }
}

// Fechar conexão
mysqli_close($conn);
?>