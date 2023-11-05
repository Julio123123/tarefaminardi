<!DOCTYPE html>
<html>
<head>
    <title>Carrossel de Cards com Expansão Automática</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Carrossel de Cards</h2>
        <div id="cardCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores de slides -->
            <ol class="carousel-indicators">
                <li data-target="#cardCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#cardCarousel" data-slide-to="1"></li>
                <li data-target="#cardCarousel" data-slide-to="2"></li>
                <!-- Adicione mais indicadores conforme necessário -->
            </ol>

            <!-- Slides do carrossel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">Conteúdo do Card 1</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#card1Content">Expandir</button>
                            </div>
                            <div id="card1Content" class="collapse">
                                <input type="text" placeholder="Nome">
                                <input type="text" placeholder="Email">
                                <textarea placeholder="Mensagem"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                            <p class="card-text">Conteúdo do Card 2</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#card2Content">Expandir</button>
                            </div>
                            <div id="card2Content" class="collapse">
                                <input type="text" placeholder="Nome">
                                <input type="text" placeholder="Email">
                                <textarea placeholder="Mensagem"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 3</h5>
                            <p class="card-text">Conteúdo do Card 3</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#card3Content">Expandir</button>
                            </div>
                            <div id="card3Content" class="collapse">
                                <input type="text" placeholder="Nome">
                                <input type="text" placeholder="Email">
                                <textarea placeholder="Mensagem"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Adicione mais slides conforme necessário -->
            </div>

            <!-- Controles de navegação -->
            <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
