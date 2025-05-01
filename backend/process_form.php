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
        die(json_encode(["status" => "error", "message" => "Por favor, preencha todos os campos."]));
    }

    // Validação de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die(json_encode(["status" => "error", "message" => "Por favor, insira um email válido."]));
    }

    // Prepara a consulta para evitar SQL Injection
    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Erro ao preparar a consulta: " . $conn->error);
        die(json_encode(["status" => "error", "message" => "Erro interno no servidor."]));
    }

    $stmt->bind_param("sss", $nome, $email, $mensagem);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Mensagem enviada com sucesso!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Erro ao enviar a mensagem."]);
    }

    $stmt->close();
    $conn->close();
}
?>