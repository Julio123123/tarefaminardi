<?php
$servername = "localhost";
$username = "root";
$password = "senha";
$dbname = "carros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$carId = $_POST['carId'];
$updateMedia = $_POST['updateMedia'];
$updateKmRodado = $_POST['updateKmRodado'];
$updateLinkImagem = $_POST['updateLinkImagem'];
$updatePreco = $_POST['updatePreco'];

if (!is_numeric($carId)) {
    die("ID do carro inválido.");
}

$sql = "UPDATE sua_tabela SET ";
$sql .= $updateMedia === 'Sim' ? "media = '$updateMedia', " : "";
$sql .= $updateKmRodado === 'Sim' ? "km_rodado = '$updateKmRodado', " : "";
$sql .= $updateLinkImagem === 'Sim' ? "link_imagem = '$updateLinkImagem', " : "";
$sql .= $updatePreco === 'Sim' ? "preco = '$updatePreco' " : "";
$sql .= "WHERE id = $carId";

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o registro: " . $conn->error;
}

$conn->close();
?>
