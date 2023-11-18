<?php
ini_set('display_errors', 1);

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "carros";

include 'conexao.php'; // Certifique-se de que este arquivo contém a conexão com o banco de dados

// Consulta para obter carros aguardando liberação
$sqlAguardando = "SELECT * FROM carros WHERE status = 'aguardando'";
$resultAguardando = mysqli_query($conexao, $sqlAguardando);
$carrosAguardando = mysqli_fetch_all($resultAguardando, MYSQLI_ASSOC);

foreach ($carrosAguardando as $carro) {
    echo "<p>{$carro['marca']} {$carro['modelo']}</p>";
}
?>

