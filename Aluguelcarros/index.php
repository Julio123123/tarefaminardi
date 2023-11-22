<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluguel de Carros</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="../aluguelcarros-master/img/logo_transparent.png">
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="img/1.jpeg"></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#comofunciona">Como Funciona</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#reviews">Reviews</a></li>
        </ul>
        <div class="header-btn">
            <?php

            session_start();
            if (isset($_SESSION['usuario'])) {
                echo "" . $_SESSION['usuario'];
                echo '<a href="php/sair.php">Sair</a>';
                echo '<<a href="php/sair.php">Devolver item</a>';
            } else {
            ?>

                <a href="Login\cadastro.html" class="cadastre-se">Cadastre-se</a>
                <a href="Login\index.html" class="entrar">Entrar</a>
            <?php
            }
            ?>
        </div>
    </header>
    <section class="home" id="home">
        <div class="text">
            <h1><span>Procurando</span> um carro<br> para alugar ?</h1>
            <p>Não perca tempo e reserve agora com a nossa empresa de aluguel de carros. <br>
                Temos preços competitivos e um atendimento excepcional.
                <br> Não hesite em nos contatar para mais informações e fazer sua reserva hoje mesmo!
            </p>

            <!--<div class="app-stores">
                <img src="img/ios.png" alt="">
                <img src="img/play.png" alt="">
            </div>-->

        </div>
        <div class="img">
            <img src="img/nivus-removebg.png" alt="nivus" width="180%">
        </div>
        <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>Localização</span>
                    <input type="search" name="" id="" placeholder="Pesquisar Localização">
                </div>
                <div class="input-box">
                    <span>Data de Retirada</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Data de Entrega</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form>
        </div>
    </section>


    <section class="comofunciona" id="comofunciona">
        <div class="heading">
            <span>Como funciona</span>
            <h1>Alugue fácil em três etapas</h1>
        </div>
        <div class="comofunciona-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Escolha um local</h2>
                <p>Escolha um local para a retirada do veículo</p>
            </div>
            <div class="box">
                <i class='bx bxs-calendar'></i>
                <h2>Data de Retirada</h2>
                <p>Escolha uma data para a retirada do veículo</p>
            </div>
            <div class="box">
                <i class='bx bxs-car'></i>
                <h2>Alugue um carro</h2>
                <p>Escolha uma das nossas inúmeras opções de veículos</p>
            </div>
        </div>
    </section>

    <section class="servicos" id="servicos">
        <div class="heading">
            <span>Melhores Serviços</span>
            <h1>Explore as melhores ofertas <br> dos melhores revendedores</h1>
        </div>
        <div class="servicos-container">
            <div class="servicos-container">
                <?php
                $hostname = "localhost";
                $username = "root";
                $password = "senha";
                $database = "carros";

                $conn = new mysqli($hostname, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['alugar'])) {
                        $car_id = $_POST['alugar'];

                        // Atualiza o status para 'alugado'
                        $sql_update = "UPDATE carros SET stt = 'alugado' WHERE id = $car_id";

                        if ($conn->query($sql_update) === TRUE) {
                            echo "Carro alugado com sucesso!";
                        } else {
                            echo "Erro ao alugar o carro: " . $conn->error;
                        }
                    }
                }

                $sql = "SELECT * FROM carros WHERE stt = 'liberado'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="box">
                            <div class="box-img">
                                <img src="<?= $row["link_imagem"] ?>" alt="Toyota Hilux">
                            </div>
                            <p><?= $row["ano"] ?></p>
                            <h3><?= $row["ano"] ?> <?= $row["marca"] ?></h3>
                            <h2>R$<?= $row["preco"] ?> <span>/Diária</span></h2>
                            <?php
                            if (isset($_SESSION['usuario'])) {
                            ?>
                                <form method="post">
                                    <input type="hidden" name="alugar" value="<?= $row["id"] ?>">
                                    <input type="submit" class="btn" value="Alugue Agora">
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                <?php
                    }
                } else {
                    echo "Nenhum carro disponível no momento.";
                }

                $conn->close();
                ?>
            </div>

            <!-- <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/car1.jpg" alt="Toyota Hilux">
                </div>
                <p>2023</p>
                <h3>2023 Toyota Hilux</h3>
                <h2>R$6.000 | R$500 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div>


            <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/car2.jpg" alt="Chevrolet Ônix">
                </div>
                <p>2021</p>
                <h3>2021 Chevrolet Ônix</h3>
                <h2>R$3.500 | R$350 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/HR-V 2.jpg" alt="Honda HR-V">
                </div>
                <p>2023</p>
                <h3>2023 Honda HR-V EXL</h3>
                <h2>R$5.450 | R$450 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/Compass.jpeg" alt="Jeep Compass">
                </div>
                <p>2024</p>
                <h3>2024 Jeep Compass </h3>
                <h2>R$6.578 | R$658 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/car5.jpg" alt="Range Rover Sport">
                </div>
                <p>2021</p>
                <h3>2021 Range Rover Sport</h3>
                <h2>R$11.000 | R$1.100 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/car6.jpg" alt="Volkswagem Gol">
                </div>
                <p>2021</p>
                <h3>2021 Volkswagem Gol </h3>
                <h2>R$2.500 | R$254 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/corolla-2023.jpg " alt="Jeep Commander">
                </div>
                <p>2023</p>
                <h3>2023 Toyota Corolla</h3>
                <h2>R$7.000 | R$665 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="../Aluguelcarros/img/Taos.jpg" alt="Volkswagem Taos">
                </div>
                <p>2023</p>
                <h3>2023 Volkswagem Taos</h3>
                <h2>R$8.800 | R$750 <span>/Diária</span></h2>
                <a href="#" class="btn">Alugue Agora</a>
            </div> -->
        </div>
    </section>
    <section class="sobre" id="sobre">
        <div class="heading">
            <span>Sobre nós</span>
            <h1>Melhor experiência do cliente</h1>
        </div>
        <div class="sobre-container">
            <div class="sobre-img">
                <img src="../Aluguelcarros/img/Corolla-Altis.png" alt="">
            </div>
            <div class="sobre-text">
                <span>Sobre nós</span>
                <p>Nós somos uma empresa de locação de veículos que oferece uma ampla variedade de modelos e opções de
                    aluguel para atender às necessidades dos nossos clientes. Com anos de experiência no mercado,
                    estamos comprometidos em fornecer um serviço de qualidade e excelência para garantir a satisfação
                    dos nossos clientes.</p>
                <p>Nosso objetivo é tornar o processo de aluguel de carros simples e conveniente, fornecendo uma
                    plataforma fácil de usar e uma equipe de suporte dedicada para ajudar nossos clientes em todas as
                    etapas do processo de aluguel. Além disso, nos esforçamos para oferecer preços competitivos e uma
                    variedade de serviços extras para garantir que nossos clientes obtenham a melhor experiência de
                    aluguel possível.</p>
                <p>Estamos empenhados em melhorar continuamente nossos serviços e tecnologias para atender às
                    necessidades em constante evolução dos nossos clientes. Se você está procurando por um serviço de
                    locação de carros confiável e de qualidade, estamos aqui para atendê-lo.</p>
                <a href="#" class="btn">Saiba mais</a>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>O que nossos clientes dizem</h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <!-- <img src="../Aluguelcarros/img/1.jpeg" alt=""> -->
                </div>
                <h2>Giovanna</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Excelente serviço de aluguel de carros, recomendo. Carros novos e bem conservados!</p>
            </div>
            <div class="box">
                <div class="rev-img">
                    <img src="../Aluguelcarros/img/2.png" alt="">
                </div>
                <h2>Gustavo</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Aluguel de carros sem estresse, excelente atendimento e carros bem conservados.</p>
            </div>
            <div class="box">
                <div class="rev-img">
                    <img src="../Aluguelcarros/img/3.png" alt="">
                </div>
                <h2>x'Juliana</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Preços competitivos e serviços extras muito úteis, ótima opção de aluguel de carros.</p>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <h2>Inscreva-se para ficar por dentro das ofertas</h2>
        <div class="box">
            <input type="text" placeholder="Digite  seu e-mail...">
            <a href="#" class="btn">Inscrever</a>
        </div>
    </section>
    <div class="copyright">
        <p>&#169; João Seixas, Julio dos Santos, Lucas Ribeiro, Matheus Daikawa.</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook-circle'></i>
                <a href="#"><i class='bx bxl-instagram-alt'></i>
                    <a href="#"><i class='bx bxl-twitter'></i>
                    </a>
        </div>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="main.js"></script>
</body>

</html>