<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Disponíveis para Alugar</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            width: 30%;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.1);
            transition: all 0.5s ease-in-out;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-info {
            padding: 10px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .popup-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Carros Disponíveis para Alugar</h2>

    <div class="card-container">
        <?php include_once 'carros_disponiveis.php'; ?>
    </div>

    <div class="popup" id="carInfoPopup">
        <span class="popup-close" onclick="closePopup()">X</span>
        <div id="carInfoContent"></div>
        <label for="diasAluguel">Quantidade de Dias:</label>
        <form method="post" action="alugar_carro.php" id="alugarForm">
            <input type="hidden" id="idCarro" name="idCarro" value="">
            <input type="number" id="diasAluguel" name="diasAluguel" min="1">
            <div class="popup-buttons">
                <button type="submit">Confirmar</button>
                <button type="button" onclick="closePopup()">Cancelar</button>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['alugar'])) {
        $idCarro = isset($_POST['idCarro']) ? intval($_POST['idCarro']) : 0;
        $diasAluguel = isset($_POST['diasAluguel']) ? intval($_POST['diasAluguel']) : 0;

        if ($idCarro > 0 && $diasAluguel > 0) {
            $conn = new mysqli("localhost", "root", "senha", "carros");

            if ($conn->connect_error) {
                die("Erro de conexão com o banco de dados: " . $conn->connect_error);
            }

            $sql = "UPDATE carros SET stt = 'alugado' WHERE id = $idCarro";

            if ($conn->query($sql) === TRUE) {
                $calculo = new Calculo();
                $valorAluguel = $calculo->calcularValor($diasAluguel);
                echo "<script>alert('Carro alugado com sucesso! Valor do aluguel: R$ " . $valorAluguel . "');</script>";
            } else {
                echo "<script>alert('Erro ao realizar o aluguel.');</script>";
            }

            $conn->close();
        }
    }
    ?>

</body>
</html>
