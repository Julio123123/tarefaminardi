<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        die("erro");
    }

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha='$senha' LIMIT 1";
    
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['usuario'] = mysqli_fetch_row($resultado)[1];
    }else {
        $_SESSION['erro'] = "usuario errado";
        header('location: ../login.php');
        exit;
    }
}

header('location: ../index.php');