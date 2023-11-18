<?php
ini_set('display_errors', 1);

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "carros";

$con = new mysqli($hostname, $username, $password, $database);

include 'conexao.php';

$sqlLiberados = "SELECT * FROM carros WHERE status = 'liberado'";
$resultLiberados = mysqli_query($conexao, $sqlLiberados);

if ($resultLiberados) {
    $carrosLiberados = mysqli_fetch_all($resultLiberados, MYSQLI_ASSOC);

    foreach ($carrosLiberados as $carro) {
        echo "<p>{$carro['marca']} {$carro['modelo']}</p>";
    }
} else {
    echo "Erro na consulta: " . mysqli_error($conexao);
}
?>

