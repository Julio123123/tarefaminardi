<?php
ini_set('display_errors', 1);

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "carros";

$con = mysqli_connect($hostname, $username, $password, $database);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $ano = $_POST['ano'];
  $cor = $_POST['cor'];
  $preco = $_POST['preco'];
  $placa = $_POST['placa'];
  $peso = $_POST['peso'];
  $documento = $_POST['documento'];
  $kilometragem = $_POST['km_rodado'];
  $link_imagem = $_POST['link_imagem'];
  $combustivel = $_POST['combustivel'];
  $media = $_POST['media'];
  $stt = $_POST['stt'];

  $sql = "INSERT INTO carros (marca, modelo, ano, cor, preco, placa, peso, renavan, km_rodado, link_imagem, combustivel, media, stt) VALUES ('$marca', '$modelo', '$ano', '$cor', '$preco', '$placa', '$peso', '$documento', '$kilometragem', '$link_imagem', '$combustivel', '$media', '$stt')";
  mysqli_query($con, $sql);

  header('Location: index.php');
}
