<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link style="border-radius: 15px;" rel="icon" href="icon.png">
    <meta charset="UTF-8">
    <title>Vet | Login</title>
    <style>
        .loginBox {
            background-color: rgba(4, 122, 148, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 1em;
            border-radius: 10px;
            text-align: center;
        }

        .logo {
            text-align: center;
        }

        input {
            padding: 10px;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 15px;
        }

        .button:hover {
            background-color: rgb(255, 140, 0);
        }

        .button {
            padding: 10px 20px 10px 20px;
            color: white;
            background-color: #e98c0d;
            border-radius: 5px;
            border: none;
            font-weight: bolder;
            font-size: 15px;
            cursor: pointer;
        }

        .voltar {
            padding: 10px;
            background-color: #e98c0d;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .voltar:hover {
            background-color: rgb(255, 140, 0);
        }
    </style>
</head>

<body style="font-family: Arial; background-image: linear-gradient(45deg, #c2dce3, #2d93a8); background-attachment: fixed">
    <a class="voltar" href="home.php">Voltar</a>
    <div class="loginBox">
        <div class="logo">
            <img style="border-radius: 10px;" src="logovet.png" alt="logo" width="50%" ;>
        </div>
        <h1 style="text-align: center;color: white">Login</h1>
        <form action="testLogin.php" method="POST">
            <div class="form-group">
                <label style="color: white"><b>Usuário</b></label>
                <input type="text" name="usuario" class="form-control" placeholder="Insira seu usuário.">
            </div>
            <br>
            <div class="form-group">
                <label style="color: white"><b>Senha&nbsp&nbsp</b></label>
                <input type="password" class="form-control" name="senha" placeholder="Insira sua senha.">
            </div>
            <br>
            <input class="button"style="font-family: Arial; font-weight: bolder" name="submit" type="submit"
                value="      Entrar      "></input>
        </form>
    </div>
</body>

</html>