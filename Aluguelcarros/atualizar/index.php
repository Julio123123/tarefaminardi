<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Carro</title>
</head>
<body>
    <h2>Atualizar Carro</h2>
    
    <form id="updateForm">
        <label for="carId">ID do Carro:</label>
        <input type="text" id="carId" name="carId" required>

        <label for="updateMedia">Atualizar Média?</label>
        <input type="radio" name="updateMedia" value="Sim" onclick="showInput('updateMediaInput')"> Sim
        <input type="radio" name="updateMedia" value="Não" checked> Não
        <input type="text" id="updateMediaInput" name="updateMediaInput" style="display:none">

        <label for="updateKmRodado">Atualizar Km Rodado?</label>
        <input type="radio" name="updateKmRodado" value="Sim" onclick="showInput('updateKmRodadoInput')"> Sim
        <input type="radio" name="updateKmRodado" value="Não" checked> Não
        <input type="text" id="updateKmRodadoInput" name="updateKmRodadoInput" style="display:none">

        <label for="updateLinkImagem">Atualizar Link da Imagem?</label>
        <input type="radio" name="updateLinkImagem" value="Sim" onclick="showInput('updateLinkImagemInput')"> Sim
        <input type="radio" name="updateLinkImagem" value="Não" checked> Não
        <input type="text" id="updateLinkImagemInput" name="updateLinkImagemInput" style="display:none">

        <label for="updatePreco">Atualizar Preço?</label>
        <input type="radio" name="updatePreco" value="Sim" onclick="showInput('updatePrecoInput')"> Sim
        <input type="radio" name="updatePreco" value="Não" checked> Não
        <input type="text" id="updatePrecoInput" name="updatePrecoInput" style="display:none">

        <button type="button" onclick="submitForm()">Atualizar</button>
    </form>

    <script>
        function showInput(inputId) {
            var inputElement = document.getElementById(inputId);
            inputElement.style.display = "inline-block";
        }

        function submitForm() {
            var formData = new FormData(document.getElementById('updateForm'));

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'update.php', true);

            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    alert(xhr.responseText);
                } else {
                    alert('Erro ao enviar requisição para o servidor.');
                }
            };

            xhr.send(formData);
        }
    </script>
</body>
</html>
