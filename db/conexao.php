<?php
function limparPost($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}

//configurações gerais CLIENTES
$servidor="localhost";
$usuario="root";
$senha= "";
$banco="blog";

//conexao
$pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>