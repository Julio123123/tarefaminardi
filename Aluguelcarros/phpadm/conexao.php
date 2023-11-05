/<?php

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "adm";

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}

session_start();