<?php
include 'conexao.php';

ini_set('display_errors', 1);

$sqlAguardando = "SELECT * FROM carros_aguardando";
$resultAguardando = $conexao->query($sqlAguardando);
$carrosAguardando = ($resultAguardando) ? $resultAguardando->fetch_all(MYSQLI_ASSOC) : [];

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Aguardando Liberação</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Carros Aguardando Liberação</h2>

    <div class="coluna">
        <?php
        foreach ($carrosAguardando as $carro) {
            $id = isset($carro['id']) ? $carro['id'] : 'N/A';
            $placa = isset($carro['placa']) ? $carro['placa'] : 'N/A';
            $link_imagem = isset($carro['link_imagem']) ? $carro['link_imagem'] : 'N/A';

            echo "<p>ID: $id | Placa: $placa</p>";
            echo "<img src='$link_imagem' alt='Carro'>";
            echo "<a href='mover_carro.php?id=$id&acao=liberar'>Liberar</a>";
        }
        ?>
    </div>
</div>

</body>
</html>
