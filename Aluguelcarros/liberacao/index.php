<?php
include 'conexao.php';

ini_set('display_errors', 1);

$sqlLiberados = "SELECT * FROM carros WHERE stt = 'liberado'";
$resultLiberados = $conexao->query($sqlLiberados);
$carrosLiberados = ($resultLiberados) ? $resultLiberados->fetch_all(MYSQLI_ASSOC) : [];

$sqlPendentes = "SELECT * FROM carros WHERE stt = 'pendente'";
$resultPendentes = $conexao->query($sqlPendentes);
$carrosPendentes = ($resultPendentes) ? $resultPendentes->fetch_all(MYSQLI_ASSOC) : [];

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Disponíveis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <div class="coluna">
        <h3>Liberados</h3>
        <?php
        foreach ($carrosPendentes as $carro) {
            $id = isset($carro['id']) ? $carro['id'] : 'N/A';
            $placa = isset($carro['placa']) ? $carro['placa'] : 'N/A';
            $link_imagem = isset($carro['link_imagem']) ? $carro['link_imagem'] : 'N/A';

            echo "<p>ID: $id | Placa: $placa</p>";
            echo "<img src='$link_imagem' alt='Carro'>";
        }
        ?>
    </div>

    <div class="coluna-centro">
        <form action="mudar_status.php" method="post">
            <label for="carro_id">ID do Carro:</label>
            <input type="text" name="carro_id" required>
            
            <label for="acao">Ação:</label>
            <select name="acao" required>
                <option value="liberado">Liberar</option>
                <option value="pendente">Deixar Pendente</option>
            </select>

            <button type="submit">Executar Ação</button>
        </form>
    </div>

    <div class="coluna">
        <h3>Pendentes</h3>
        <?php
        foreach ($carrosLiberados as $carro) {
            $id = isset($carro['id']) ? $carro['id'] : 'N/A';
            $placa = isset($carro['placa']) ? $carro['placa'] : 'N/A';
            $link_imagem = isset($carro['link_imagem']) ? $carro['link_imagem'] : 'N/A';

            echo "<p>ID: $id | Placa: $placa</p>";
            echo "<img src='$link_imagem' alt='Carro'>";
        }
        ?>
    </div>
</div>

</body>
</html>
