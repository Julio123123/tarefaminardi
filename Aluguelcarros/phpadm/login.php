<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['erro'] = "Campos em branco não são permitidos.";
        header('location: ../login.php');
        exit;
    }

    $sql = "SELECT * FROM adm WHERE email = '$email' AND senha = '$password' LIMIT 1";
    
    $resultado = mysqli_query($con, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $_SESSION['adm'] = $row['nome'];
    } else {
        $_SESSION['erro'] = "Usuário ou senha incorretos.";
        header('location: ../login.php');
        exit;
    }
}

header('location: ../indexadm.php');
