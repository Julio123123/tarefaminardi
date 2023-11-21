<?php
require_once "Calculo.php";
require_once "carros_disponiveis.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['alugar'])) {
    $idCarro = isset($_POST['idCarro']) ? intval($_POST['idCarro']) : 0;
    $diasAluguel = isset($_POST['diasAluguel']) ? intval($_POST['diasAluguel']) : 0;

    if ($idCarro <= 0 || $diasAluguel <= 0) {
        echo "ID do item e dias de aluguel são obrigatórios.";
        exit();
    }

    $conn = new mysqli("localhost", "root", "senha", "carros");

    if ($conn->connect_error) {
        die("Erro de conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "UPDATE carros SET stt = 'alugado' WHERE id = $idCarro";

    if ($conn->query($sql) === TRUE) {
        $calculo = new Calculo();
        $valorAluguel = $calculo->calcularValor($diasAluguel);
        
        echo "<script>alert('Valor do aluguel: R$ " . $valorAluguel . ". Aluguel confirmado com sucesso!');</script>";
    } else {
        echo "Erro ao atualizar o status do carro: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Método de requisição inválido.";
}
?>
