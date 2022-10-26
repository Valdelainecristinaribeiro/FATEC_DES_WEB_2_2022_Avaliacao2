<?php

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
    <?php
        $file_name = "cadastrado.txt";
        if(file_exists($file_name)) {
                $handle = fopen( $file_name, 'r');
                $ler = fread( $handle, filesize($file_name));
                echo $file_name ."<br>";
                fclose($handle);
        }
        echo ($_POST['nomeproduto']. "<br>");
        echo ($_POST['codigo']. "<br>");
        echo ($_POST['quantidade']. "<br>");
    ?>
    
    <a href="inicio.php" class="btn btn-info" value="Voltar">Voltar</a>


</body>
</html>