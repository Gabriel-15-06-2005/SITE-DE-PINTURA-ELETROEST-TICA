<?php
// filepath: /backend/process_form.php

// Inclui a configuração do banco de dados
require 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $mensagem = trim($_POST['mensagem']);

    // Validação básica
    if (empty($nome) || empty($email) || empty($mensagem)) {
        die("Por favor, preencha todos os campos.");
    }

    // Validação de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Por favor, insira um email válido.");
    }

    // Prepara a consulta para evitar SQL Injection
    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Erro ao preparar a consulta.");
    }

    $stmt->bind_param("sss", $nome, $email, $mensagem);

    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }

    $stmt->close();
    $conn->close();
}
?>