<?php
// Configurações do banco de dados
$host = 'localhost'; // seu host
$user = 'root'; // seu usuário do banco de dados
$password = 'aluno'; // sua senha do banco de dados
$dbname = 'turistche'; // seu banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>