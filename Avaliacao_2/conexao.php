<?php

require_once('./acesso_banco.php');

$conn = new mysqli($servidor, $usuario, $senha, $nome_banco);

if($conn->connect_error){
    die("Conexão falhou: ". $conn->connect_error);
}

?>