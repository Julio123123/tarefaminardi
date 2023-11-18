<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir carro</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  </div>
    <div class="container">
      <h1>Insira o carro</h1>    <form action="insert.php" method="post">
        <div class="form-group">
          <label for="marca">Marca</label>
          <input type="text" class="form-control" id="marca" name="marca" required>
        </div>
        <div class="form-group">
          <label for="modelo">Modelo</label>
          <input type="text" class="form-control" id="modelo" name="modelo" required>
        </div>
        <div class="form-group">
          <label for="ano">ano</label>
          <input type="text" class="form-control" id="ano" name="ano" required>
        </div>
        <div class="form-group">
          <label for="preco">Preço por dia</label>
          <input type="number" step=".01" class="form-control" id="preco" name="preco" required>
        </div>
        <div class="form-group">
          <label for="placa">Placa</label>
          <input type="text" class="form-control" id="placa" name="placa" required>
        </div>
        <div class="form-group">
          <label for="peso">Peso</label>
          <input type="number" class="form-control" id="peso" name="peso" required>
        </div>
        <div class="form-group">
          <label for="documento">Renavan</label>
          <input type="number" class="form-control" id="documento" name="documento" required>
        </div>
        <div class="form-group">
          <label for="km_rodado">Quilometragem</label>
          <input type="number" class="form-control" id="km_rodado" name="km_rodado" required>
        </div>
        <div class="form-group">
          <label for="cor">Cor</label>
          <input type="text" class="form-control" id="cor" name="cor" required>
        </div>
        <div class="form-group">
          <label for="link_imagem">link da imagem do carro</label>
          <input type="text" class="form-control" id="link_imagem" name="link_imagem" required>
        </div>
        <div class="form-group">
          <label for="combustivel">Combustível</label>
          <select class="form-control" id="combustivel" name="combustivel" required>
            <option value="flex">Flex</option>
            <option value="etanol">Etanol</option>
            <option value="gasolina">Gasolina</option>
          </select>
        </div>
        <div class="form-group">
          <label for="media">Média de km por litro</label>
          <input type="number" step=".01" class="form-control" id="media" name="media" required>
        </div>
        <div class="form-group">
          <label for="transmissao">Transmissão</label>
          <div class="form-radio">
            <input type="radio" name="transmissao" value="automatico"> Automático
          </div>
          <div class="form-radio">
            <input type="radio" name="transmissao" value="manual"> Manual
          </div>
          <div class="form-group">
          <label for="stt">Status</label>
          <div class="form-radio">
            <input type="radio" name="stt" value="liberado"> Liberado
          <div class="form-radio">
            <input type="radio" name="stt" value="pendente"> Pendente
          </div>
          
        </div>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </form>
    </div>
  </div>
</body>
</html>
