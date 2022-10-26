<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
    <h1>Bem-vindo ao mercado Valdelaine.</h1>
    <br>
    <form action="cadastrar.php" method="post">
        <p>Cadastrar novos produtos</p>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Cadastrar">
        </div>
    </form>
    <br>
    <form action="sair.php" method="post">
        <p>Sair</p>
        <div class="form-group">
        <input type="submit" class="btn btn-info" value="Sair">
        </div>
    </form>
    <form action="lista_produtos.php" method="post">
        <p>Lista de Produtos</p>
        <div class="form-group">
        <input type="submit" class="btn btn-info" value="Lista de produtos">
        </div>
    </form>
    
</body>
</html>