<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $ano = $_POST['ano'];
  $preco = $_POST['preco'];
  $placa = $_POST['placa'];
  $peso = $_POST['peso'];
  $documento = $_POST['documento'];
  $kilometragem = $_POST['kilometragem'];
  $quantidade = $_POST['quantidade'];

  $sql = "INSERT INTO carros (marca, modelo, ano, preco, placa, peso, documento, kilometragem, quantidade) VALUES ('$marca', '$modelo', '$ano', '$preco', '$placa', '$peso', '$documento', '$kilometragem', '$quantidade')";
  mysqli_query($conn, $sql);

  // Redireciona para a página de listagem de carros
  header('Location: index.php');
}
