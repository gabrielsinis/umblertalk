<?php
// Configurações do banco de dados
$host = 'mysql832.umbler.com'; // Substitua pelo host do banco de dados
$usuario = 'dfwefs'; // Substitua pelo seu usuário do banco de dados
$senha = 'Alterar2026'; // Substitua pela sua senha do banco de dados
$database = 'sdfsdfs'; // Substitua pelo nome do banco de dados
$porta = 3306; // Substitua pela porta do banco de dados, se diferente da padrão

// Criar uma conexão com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $database, $porta);

// Verificar a conexão
if ($conn->connect_error) {
    die('Erro na conexão: ' . $conn->connect_error);
} else {
    echo 'Conexão com o banco de dados realizada com sucesso!';
}

// Fechar a conexão
$conn->close();
?>
