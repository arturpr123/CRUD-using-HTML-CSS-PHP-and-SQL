<?php

include_once('config.php');

if (isset($_POST['update'])) 
{
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE vetcadastro SET usuario='$usuario', email='$email', senha='$senha' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
    header('Location: sistema.php');
?>