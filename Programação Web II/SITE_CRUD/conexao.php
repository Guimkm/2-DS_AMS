<?php
// Configurações padrão do XAMPP
$host = 'localhost';
$dbname = 'clube_assinaturas';
$user = 'root'; 
$pass = ''; 

try {
    // Iniciando a conexão PDO (PHP Data Objects)
    // O PDO é o padrão moderno do PHP. Ele permite conectar em vários tipos de bancos de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    
    // Configura o PDO para lançar exceções quando encontrar erros de SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Se a conexão falhar, o bloco 'catch' captura o erro e interrompe o script (die)
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>