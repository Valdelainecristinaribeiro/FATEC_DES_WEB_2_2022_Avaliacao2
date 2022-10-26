<?php
require_once('./conexao.php');
require_once('./acesso_banco.php');

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
    header("location: inicio.php");
    exit;
}

$banco = "INSERT INTO produto (nome, codigo, estoque)
VALUES ('".$_POST['nome']."','".$_POST['codigo']."','".$_POST['estoque']."')";

if ($conn->query($banco) === TRUE) {
    echo "";
} else {
    echo "Erro: " . $banco . "<br>" . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos cadastrados</title>
    <link rel="stylesheet" type="text/css" href="./style.css"/>
</head>
    <body>
        <h1>Produto cadastrado com sucesso! </h1>
        
        <form action="cadastrar.php" method="post">
        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Voltar ao cadastro">
        </div>
        </form>
        <br>
        <form action="sair.php" method="post">
            <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Sair">
            </div>
        </form>
    </body>

</html>