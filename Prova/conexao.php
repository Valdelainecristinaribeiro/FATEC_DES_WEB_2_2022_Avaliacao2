<?php

require_once('./dadosbanco.php');

$conn = new mysqli($servername, $username, $password);

// Checar Conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso!";
?>