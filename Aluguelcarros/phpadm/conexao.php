<?php

$hostname = "localhost";
$username = "root";
$password = "senha";
$database = "adm";

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die("erro");
}

session_start();
