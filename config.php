<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');

$conexao = new mysqli(HOST, USER, PASS, BASE);

/*if ($conexao->connect_errno) {
echo "Erro!";
} else {
echo "Conexão bem-sucedida.";
}*/
?>