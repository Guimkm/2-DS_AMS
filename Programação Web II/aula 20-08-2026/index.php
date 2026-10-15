<?php

$nome = $_POST["nome"];

$curso = $_POST["curso"];

$host = "localhost";

$dbName = "escola";

$user = "root";

$password = "etec123";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

    $sql = "INSERT INTO alunos(nome, curso) VALUES (:nome, :curso)"; // codigo sql

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);

    $stmt->bindParam(':curso', $curso);

    $stmt->execute(); // executa o comando sql

    echo "Aluno cadastrado com suecesso!";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>