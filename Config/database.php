<?php
$host = 'localhost'; // Host do banco de dados
$username = 'root'; // Nome de usuário do banco de dados
$password = ''; // Senha do banco de dados
$database = 'coimbra_db'; // Nome do banco de dados

try {
    // Criar uma conexão com o banco de dados usando PDO
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);    
    // Configurar o PDO para lançar exceções em caso de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Agora você pode executar consultas no banco de dados usando $conn
} catch (PDOException $e) {
    die("Erro na conexão: ". $e->getMessage());
}
?>
