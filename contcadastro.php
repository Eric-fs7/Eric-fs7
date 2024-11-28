<?php
session_start(); // Inicie a sessão
include 'conectar.php'; // Inclua o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];

    // Validação do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Email inválido.";
        header("Location: cadastro.php");
        exit();
    }

    // Verifica se as senhas coincidem
    if ($senha !== $csenha) {
        $_SESSION['error'] = "As senhas não coincidem.";
        header("Location: cadastro.php");
        exit();
    }

    // Insere o usuário no banco de dados
    $query = "INSERT INTO usuarios (email, nome, senha) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $email, $nome, $senha); // Armazenando senha em texto simples

        if (mysqli_stmt_execute($stmt)) {
            // Cadastro bem-sucedido, redireciona para a página de login
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error'] = "Erro ao cadastrar. Tente novamente.";
            header("Location: cadastro.php");
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['error'] = "Erro na preparação da consulta. Tente novamente.";
        header("Location: cadastro.php");
        exit();
    }
}

mysqli_close($conn);
?>