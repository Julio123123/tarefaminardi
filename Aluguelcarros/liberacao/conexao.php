<?php
//ini_set('memory_limit', '256M');
//set_time_limit(6000); 

//include 'conexao.php';

$conexao = mysqli_connect("localhost", "root", "senha", "carros");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemId = $_POST['itemId'];
    $acao = $_POST['acao'];

    if (empty($itemId) || empty($acao)) {
        $response = ['success' => false, 'message' => 'ID do item e ação são obrigatórios.'];
    } else {
        if ($acao === 'liberar') {
            $sql = "UPDATE carros SET status = 'liberado' WHERE id = $itemId";
        } elseif ($acao === 'suspender') {
            $sql = "UPDATE carros SET status = 'suspenso' WHERE id = $itemId";
        }

        $result = mysqli_query($conexao, $sql);

        if ($result) {
            $response = ['success' => true, 'message' => 'Ação realizada com sucesso.'];
        } else {
            $response = ['success' => false, 'message' => 'Erro ao realizar ação.'];
        }
    }
} else {
    $response = ['success' => false, 'message' => 'Método de requisição inválido.'];
}

$sqlLiberados = "SELECT * FROM carros WHERE status = 'liberado' LIMIT 10";
$resultLiberados = mysqli_query($conexao, $sqlLiberados);
$carrosLiberados = mysqli_fetch_all($resultLiberados);

$sqlAguardando = "SELECT * FROM carros WHERE status = 'aguardando' LIMIT 10";
$resultAguardando = mysqli_query($conexao, $sqlAguardando);
$carrosAguardando = mysqli_fetch_all($resultAguardando);

mysqli_close($conexao);

$response['carrosLiberados'] = $carrosLiberados;
$response['carrosAguardando'] = $carrosAguardando;

header('Content-Type: application/json');
echo json_encode($response);
?>