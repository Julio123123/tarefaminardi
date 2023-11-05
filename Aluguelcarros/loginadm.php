<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: aqua;
        }

        .tv-bg {
            background: aqua;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .formLogin {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border-radius: 20px;
            padding: 60px;
            box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
            position: relative;
            z-index: 1;
        }

        .formLogin h1 {
            padding: 0;
            margin: 0;
            font-weight: 500;
            font-size: 2.3em;
            text-align: center;
            text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .formLogin h1:hover {
            transform: scale(1.2);
        }

        .formLogin p {
            display: inline-block;
            font-size: 14px;
            color: #666;
            margin-bottom: 25px;
        }

        .formLogin .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .formLogin input {
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: all linear 160ms;
            outline: none;
        }

        .formLogin input:focus {
            border: 1px solid #f72585;
        }

        .formLogin label {
            font-size: 14px;
            font-weight: 600;
        }

        .formLogin a {
            display: inline-block;
            font-size: 13px;
            color: #555;
            transition: all linear 160ms;
        }

        .formLogin a:hover {
            color: #f72585;
        }

        .btn {
            background: aqua;
            color: white;
            font-size: 14px;
            font-weight: 600;
            border: none !important;
            transition: all linear 160ms;
            cursor: pointer;
            margin: 0 !important;
        }

        .btn:hover {
            transform: scale(1.05);
            background: aqua;
        }

        .mouse-bar {
            position: absolute;
            background: blue;
            height: 3px;
            width: 0;
            bottom: 0;
            transition: width 0.3s;
        }

        .btn-ghost {
            position: relative;
            z-index: 2;
        }
    </style>
</head><body>
    <div class="form-container">
        <form class="formLogin" action="phpadm/login.php" method="post">
            <h1 class="admin-effect">BEM VINDO ADMINISTRADOR</h1>
            <div class="form-group admin-effect">
                <label for="email">Insira o e-mail</label>
                <input type="text" name="email" id="email" autocomplete="off" class="form-control-material" required/>
            </div>
            <div class="form-group admin-effect">
                <label for ="password">Insira a senha</label>
                <input type="password" name="password" id="password" autocomplete="off" class="form-control-material" required/>
            </div>

                <button type="submit" class="btn btn-primary btn-ghost" id="enterButton">ENTRAR</button>

            <div class="mouse-bar"></div>
        </form>
    </div>

    <?php
    if (isset($_SESSION['erro'])) {
        echo "erro ao logar";
        unset($_SESSION['erro']);
    }
    ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>
    <script>
        const mouseBar = document.querySelector('.mouse-bar');
        const enterButton = document.querySelector('#enterButton');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth;
            const buttonRight = (enterButton.offsetLeft + enterButton.offsetWidth) / window.innerWidth;
            const barWidth = `${Math.min(mouseX, buttonRight) * 100}%`; 
            mouseBar.style.width = barWidth;
        });
    </script>
</body>
</html>