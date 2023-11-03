<?php

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "aluguel";

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die("erro");
}

session_start();
