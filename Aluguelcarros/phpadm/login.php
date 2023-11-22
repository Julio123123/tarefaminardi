<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        $_SESSION['erro'] = "Campos em branco não são permitidos.";
        header('location: ../adm/index.');
        exit;
    }

    $sql = "SELECT * FROM adm WHERE email = '$email' AND senha = '$senha' LIMIT 1";
    
    $resultado = mysqli_query($con, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $_SESSION['adm'] = $row['nome'];
    } else {
        $_SESSION['erro'] = "Usuário ou senha incorretos.";
        header('location: ../index.php');
        exit;
    }
}

header('location: ../adm/index.php');