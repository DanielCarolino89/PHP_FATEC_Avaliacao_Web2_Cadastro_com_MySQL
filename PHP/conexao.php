<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco_web2";

// Criar Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar Conexão
if ($conn->connect_error) {
    // Logar o erro em um arquivo de log e exibir uma mensagem genérica
    error_log("Conexão falhou: " . $conn->connect_error);
    die("Conexão com o banco de dados falhou. Por favor, tente novamente mais tarde.");
}

echo "CONECTADO AO BANCO DE DADOS COM SUCESSO!";
?>