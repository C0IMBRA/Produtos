<?php
$host = 'localhost:33007';
$username = 'root';
$password = 'root_password';
$database = 'coimbra_db';

try {

    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erro na conexão: ". $e->getMessage());
}
?>
