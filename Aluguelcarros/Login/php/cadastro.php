<?php
ini_set('display_errors', 1);

require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['firstname'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    if (empty($nome) || empty($cpf) || empty($email) || empty($celular) || empty($senha) || empty($confirmPassword)) {
        die("erro");
    }
    
    if ($senha != $confirmPassword) {
        die("senhas estao diferentes");
    }

    $sql = "INSERT INTO usuario (nome, cpf, email, celular, senha) VALUES 
            ('$nome', '$cpf', '$email', '$celular', '$senha')";
    
    $resultado = mysqli_query($con, $sql);
}

header('location: ../../');