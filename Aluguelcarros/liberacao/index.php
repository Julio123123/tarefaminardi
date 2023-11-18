<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberar/Suspender Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Liberar/Suspender Item</h2>

    <div class="coluna">
        <h3>Carros Aguardando Liberação</h3>
        <?php include 'aguardando.php'; ?>
    </div>

    <form id="liberacaoForm" action="processar_acao.php" method="post">
        <div class="form-group">
            <label for="itemId">ID do Item:</label>
            <input type="text" id="itemId" name="itemId" required>
        </div>

        <div class="form-group">
            <label for="acao">Ação:</label>
            <select id="acao" name="acao" required>
                <option value="liberar">Liberar</option>
                <option value="suspender">Suspender</option>
            </select>
        </div>

        <button type="submit">Enviar</button>
    </form>

    <div class="coluna">
        <h3>Carros Liberados</h3>
        <?php
        include 'conexao.php'; // Certifique-se de que este arquivo contém a conexão com o banco de dados

        // Passa a conexão para os arquivos incluídos
        include 'liberados.php';

        // Fecha a conexão após o uso
        mysqli_close($conexao);
        ?>
    </div>
</div>

</body>
</html>
