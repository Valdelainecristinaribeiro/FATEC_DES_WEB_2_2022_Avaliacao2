<?php
$file_name = "cadastrado.txt";
if(!file_exists($file_name)){
    $handle = fopen($file_name, "w");
} else {
    $handle = fopen($file_name, "a");
    fwrite($handle, "Nome: " .$_POST['nomeproduto'] ."\n");
    fwrite($handle, "Código: " .$_POST['codigo'] ."\n");
    fwrite($handle, "Quantidade: " .$_POST['quantidade'] ."\n");
    fflush($handle);
    fclose($handle);
}

header("location: cadastrar.php");
?>