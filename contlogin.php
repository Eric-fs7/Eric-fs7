<?php
// Incluir o arquivo de conexão
include 'conectar.php';
session_start(); // Inicie a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['email']; // Usando o nome correto
    $senha = $_POST['senha']; // Campo para senha

    // Validação básica
    if (empty($login) || empty($senha)) {
        $_SESSION['error'] = "Por favor, preencha todos os campos.";
        header("Location: login.php");
        exit();
    }

    // Prepare a parameterized query
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
    $stmt->bind_param("ss", $login, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['nome_usuario'] = $row['email'];
        header("Location: index.php"); // Redirecionar para a página principal
        exit();
    } else {
        $_SESSION['error'] = "Email ou senha incorretos.";
        header("Location: login.php");
        exit();
    }
}

// Fechar conexão
$conn->close();
?>