<?php
// filepath: /backend/db_config.php

$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "nome_do_banco";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>