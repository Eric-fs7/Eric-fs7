<?php
// Conexão com o banco de dados
include 'conectar.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_hotel = $_POST['nome_hotel'];
    $localizacao = $_POST['localizacao'];
    $telefone = $_POST['telefone'];
    
    // Inicializar a variável da imagem
    $imagem_hotel = null;

    // Verificar se uma imagem foi enviada
    if (isset($_FILES['imagem_hotel']) && $_FILES['imagem_hotel']['error'] == UPLOAD_ERR_OK) {
        // Verificar o tipo de arquivo
        $tipo_imagem = mime_content_type($_FILES['imagem_hotel']['tmp_name']);
        $tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];

        if (in_array($tipo_imagem, $tipos_permitidos)) {
            // Ler o conteúdo do arquivo da imagem
            $imagem_hotel = file_get_contents($_FILES['imagem_hotel']['tmp_name']);
        } else {
            echo "Tipo de arquivo não permitido. Apenas JPEG, PNG e GIF são aceitos.";
            exit;
        }
    } else {
        echo "Erro ao enviar a imagem.";
        exit;
    }

    // Preparar e vincular
    $stmt = $conn->prepare("INSERT INTO pontos (nome, localizacao, telefone, foto) VALUES (?, ?, ?, ?)");

    // Verifique se a imagem não é nula e use o tipo correto para o bind_param
    if ($imagem_hotel !== null) {
        $stmt->bind_param("sssb", $nome_hotel, $localizacao, $telefone, $dummy);
        $dummy = null; // Para o bind_param, mas não usado
        $stmt->send_long_data(3, $imagem_hotel); // Envia o blob separadamente
    } else {
        // Se não houver imagem, use NULL
        $stmt->bind_param("sss", $nome_hotel, $localizacao, $telefone);
    }

    // Executar a consulta
    if ($stmt->execute()) {
        header("Location: index.php");
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
}

$conn->close();
?>