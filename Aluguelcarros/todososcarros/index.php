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

        .card:hover{
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
    </div>

    <script>
        function showPopup(carInfo) {
            document.getElementById('carInfoContent').innerHTML = carInfo;
            document.getElementById('carInfoPopup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('carInfoPopup').style.display = 'none';
        }
    </script>

</body>
</html>

