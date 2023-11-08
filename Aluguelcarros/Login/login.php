<?php

$conn = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');

$sql = 'SELECT * FROM users WHERE email = :email';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    die('Usuário não existe.');
}

if (!password_verify($_POST['pswd'], $user['password'])) {
    die('Senha incorreta.');
}

session_start();
$_SESSION['user_id'] = $user['id'];

header('Location: index.php');

?>
