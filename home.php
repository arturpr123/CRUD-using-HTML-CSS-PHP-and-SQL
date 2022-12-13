<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link style="border-radius: 15px;" rel="icon" href="icon.png">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Vet | Home</title>
    <style>
        header {
            margin: auto;
            color: white;
        }

        .Navbar {
            ;
            position: relative;
            text-align: right;
            padding: 1em;
            background-color: rgba(4, 122, 148, 0.6);
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #e98c0d;
            border-radius: 5px;
            padding: 10px;
            font-weight: bold
        }

        a:hover {
            background-color: rgb(255, 140, 0);
        }

        .texto {
            margin-top: 70px;
            position: relative;
            text-align: center;
            color: white;
        }

        .imagem {
            margin-top: 30px;
            text-align: center;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            background-color: rgba(4, 122, 148, 0.6);
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            padding: 10px;
            margin-top: 110px;
            border-radius: 10px;
        }
    </style>
</head>
<header>
    <div class="Navbar">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastro</a>
    </div>

</header>

<body style="font-family: Arial; background-image: linear-gradient(45deg, #c2dce3, #2d93a8); background-attachment: fixed;">
    <div class="imagem">
        <img style="border-radius: 10px" src="logovet.png" alt="logo">
    </div>
    <div class="texto">
        <h1>Sejam bem-vindos!</h1>
    </div>
</body>
<footer style="color: white">
    <h5>Artur Pereira Rebouças</h5>
    <h6>Médico Veterinário</h6>
    <h6>CRMV-CE 3662</h6>
</footer>

</html>