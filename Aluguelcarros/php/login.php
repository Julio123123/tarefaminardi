<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (empty($email) || empty($password)) {
        die("erro");
    }

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha='$password' LIMIT 1";
    
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