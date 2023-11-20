<?php
$host ='localhost';
$dbname = 'base_si';
$username= 'root';
$password ='super#2022.2';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tel = $_POST['telefone'];


    $sql = "INSERT INTO usuarios (nome,email,senha,telefone) VALUES (:nome, :email, :senha, :telefone)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $tel, PDO::PARAM_STR);

    $stmt->execute();

    echo "Usuário inserido com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

?>