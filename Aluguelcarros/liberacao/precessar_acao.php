<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $itemId = $_POST['itemId'];
    $acao = $_POST['acao'];

    // Validação básica (adapte conforme necessário)
    if (empty($itemId) || empty($acao)) {
        $response = ['success' => false, 'message' => 'ID do item e ação são obrigatórios.'];
    } else {
        // Realiza a operação no banco de dados
        if ($acao === 'liberar') {
            $sql = "UPDATE carros SET status = 'liberado' WHERE id = $itemId";
        } elseif ($acao === 'suspender') {
            $sql = "UPDATE carros SET status = 'suspenso' WHERE id = $itemId";
        }

        $result = mysqli_query($conexao, $sql);

        // Verifica se a operação foi bem-sucedida
        if ($result) {
            $response = ['success' => true, 'message' => 'Ação realizada com sucesso.'];
        } else {
            $response = ['success' => false, 'message' => 'Erro ao realizar ação.'];
        }
    }

    // Redireciona de volta para a página principal
    header("Location: liberacao_suspensao.html");
    exit();
} else {
    $response = ['success' => false, 'message' => 'Método de requisição inválido.'];
}

// Consulta para obter carros liberados
$sqlLiberados = "SELECT * FROM carros WHERE status = 'liberado'";
$resultLiberados = mysqli_query($conexao, $sqlLiberados);
$carrosLiberados = mysqli_fetch_all($resultLiberados, MYSQLI_ASSOC);

// Consulta para obter carros aguardando liberação
$sqlAguardando = "SELECT * FROM carros WHERE status = 'aguardando'";
$resultAguardando = mysqli_query($conexao, $sqlAguardando);
$carrosAguardando = mysqli_fetch_all($resultAguardando, MYSQLI_ASSOC);

mysqli_close($conexao);
?>
