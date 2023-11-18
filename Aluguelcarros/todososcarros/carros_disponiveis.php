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

$sql = "SELECT * FROM carros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card' onclick=\"showPopup('" . $row["marca"] . " - " . $row["marca"] . "<br>Ano de Fabricação: " . $row["ano"] . "<br>KM Rodado: " . $row["km_rodado"] . "<br>Cor: " . $row["cor"] . "<br>Preço: R$ " . $row["preco"] . "')\">";
        echo "<img src='" . $row["link_imagem"] . "' alt='Imagem do Carro'>";
        echo "<div class='card-info'>";
        echo "<h5>" . $row["marca"] . " - " . $row["marca"] . "</h5>";
        echo "<p>Ano: " . $row["ano"] . "</p>";
        echo "<p>KM Rodado: " . $row["km_rodado"] . "</p>";
        echo "<p>Cor: " . $row["cor"] . "</p>";
        echo "<p>Preço: R$ " . $row["preco"] . "</p>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Nenhum carro disponível no momento.";
}

$conn->close();
?>