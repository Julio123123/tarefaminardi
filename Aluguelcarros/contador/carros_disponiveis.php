<?php
ini_set('display_errors', 1);

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "carros";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM carros WHERE stt = 'liberado'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='" . $row["link_imagem"] . "' alt='Imagem do Carro'>";
        echo "<div class='card-info'>";
        echo "<h5>" . $row["marca"] . " - " . $row["modelo"] . "</h5>";
        echo "<p>Ano: " . $row["ano"] . "</p>";
        echo "<p>KM Rodado: " . $row["km_rodado"] . "</p>";
        echo "<p>Cor: " . $row["cor"] . "</p>";
        echo "<p>Preço: R$ " . $row["preco"] . "</p>";
        echo "<form method='post' action='alugar_carro.php'>";
        echo "<input type='hidden' name='carro_id' value='" . $row["id"] . "'>";
        echo "<label for='diasAluguel'>Quantidade de Dias:</label>";
        echo "<input type='number' id='diasAluguel' name='diasAluguel' min='1'>";
        echo "<button type='submit'>Alugar</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Nenhum carro disponível no momento.";
}

$conn->close();
?>
