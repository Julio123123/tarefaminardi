<?php
$servername = "localhost";
$username = "root";
$password = "senha";
$dbname = "carros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS id,
               SUM(CASE WHEN stt = 'liberado' THEN 1 ELSE 0 END) AS liberados,
               SUM(CASE WHEN stt = 'pendente' THEN 1 ELSE 0 END) AS pendentes,
               SUM(CASE WHEN stt = 'alugado' THEN 1 ELSE 0 END) AS alugados
        FROM carros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $id = $row['id'];
    $liberados = $row['liberados'];
    $pendentes = $row['pendentes'];
    $alugados = $row['alugados'];

    if ($id != 0) {
        $liberadosPorcentagem = ($liberados / $id) * 100;
        $pendentesPorcentagem = ($pendentes / $id) * 100;
        $alugadosPorcentagem = ($alugados / $id) * 100;
    } else {
        $liberadosPorcentagem = 0;
        $pendentesPorcentagem = 0;
        $alugadosPorcentagem = 0;
    }
} else {
    echo "Nenhum dado encontrado";
}

$conn->close();
?>
