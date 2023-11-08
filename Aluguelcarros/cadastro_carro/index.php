<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir carro</title>
  <link rel="stylesheet" href="style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    body {
      margin: 0;
      overflow: hidden;
      background-color: #e6f7ff;
      display: flex;
      align-items: center;
      justify-content: center; 
      height: 100vh;
  background-image: url('/fotofundo/Backgroundcarro.png') ;
  background-size: cover;
  background-repeat: no-repeat;
    }

    .scrollable-content {
      width: 50%;
      max-height: 80vh;
      overflow-y: auto;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .background-image {
      background-image: url('/img/');
      background-repeat: no-repeat;
      background-size: cover;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
    }

    h1 {
      font-size: 3.5rem;
      letter-spacing: 2px;
      color: #f5863a;
      margin-bottom: 20px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #f7f7f8;
      margin: 0;
    }

    button {
      background-color: #f5863a;
      color: #ffffff;
      padding: 15px;
      border-radius: 15px;
      cursor: pointer;
      border: none;
      width: 50%;
      margin: 10px auto;
    }
  </style>
</head>
<body>
  <div class="scrollable-content">
    <h1>Insira o carro</h1>
    <form action="insert.php" method="post">
      <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca" required>
      </div>
      <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo" required>
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
        <label for="link">Link da imagem do carro</label>
        <input type="text" class="form-control" id="link" name="link" required>
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
        <input type="radio" name="transmissao" value="automatico"> Automático
        <input type="radio" name="transmissao" value="manual"> Manual
      </div>
      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
  </div>
</body>
</html>
