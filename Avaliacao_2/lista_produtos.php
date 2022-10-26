<?php

require_once('./conexao.php');
require_once('./acesso_banco.php');

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
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
    <title>Lista de produtos</title>
</head>
<body>
    <h1>Produtos cadastrados</h1>
    
    <a href="inicio.php" class="btn btn-info" value="Voltar">Voltar</a>
    <br>
    <a href="cadastrar.php" class="btn btn-info" value="Voltar para cadastro de produtos">Voltar para cadastro de produtos</a>
    <br>
    <?php

    $banco = "SElECT * FROM produto";
    $resultado = mysql_array($banco);

    echo "Nome do produto  |  Código de barras  |  Quantidade no estoque " ."<br>" .PHP_EOL;
    while ($fileira = mysql_fetch_array($resultado)) {
        echo $fileira["nome"] . "  |  " . $fileira["codigo"] . "  |  " . $fileira["estoque"] . "<br>" .PHP_EOL;
    }

    echo $banco;

    ?>


</body>
</html>