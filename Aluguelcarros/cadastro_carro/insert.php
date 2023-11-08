<?php

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "carros";

$con = mysqli_connect($hostname, $username, $password, $database);

ini_set('display_errors', 1);
require_once "index.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $preco = $_POST['preco'];
  $placa = $_POST['placa'];
  $peso = $_POST['peso'];
  $documento = $_POST['documento'];
  $km_rodado = $_POST['km_rodado'];
  $cor = $_POST['cor'];

  $sql = "INSERT INTO carros(marca, modelo, preco, placa, peso, documento, km_rodado, cor) VALUES ('$marca', '$modelo', '$preco', '$placa', '$peso', '$documento', '$km_rodado', '$cor')";

  var_dump($sql);
  mysqli_query($con, $sql);

  header('Location: index.php');
}

?>
