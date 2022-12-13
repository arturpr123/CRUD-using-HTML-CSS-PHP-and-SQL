<?php
if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM vetcadastro WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $usuario = $user_data['usuario'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
        }


    } else {
        header('Location: sistema.php');
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link style="border-radius: 15px;" rel="icon" href="icon.png">
    <meta charset="UTF-8">
    <title>Vet | Editar</title>
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

<body style="font-family: Arial; background-image: linear-gradient(45deg, #c2dce3, #2d93a8)">
    <a class="voltar" href="sistema.php">Voltar</a>
    <div class="loginBox">
        <div class="logo">
            <img style="border-radius: 10px;" src="img_dog.png" alt="logo" width="15%" ;>
        </div>
        <h1 style="text-align: center;color: white">Editar Cliente</h1>
        <form action="saveEdit.php" method="POST">
            <div class="form-group">
                <label style="color: white"><b>Usuário</b></label>
                <input type="text" name="usuario" class="form-control" value="<?php echo $usuario ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label style="color: white"><b>E-mail&nbsp&nbsp</b></label>
                <input type="email" name="email" class="form-control" value="<?php echo $email ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label style="color: white"><b>Senha&nbsp&nbsp</b></label>
                <input type="password" class="form-control" name="senha" value="<?php echo $senha ?>" required>
            </div>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input class="button" style="font-family: Arial; font-weight: bold" name="update" id="update"
                type="submit" value="     Editar     "></input>
        </form>
    </div>
</body>

</html>