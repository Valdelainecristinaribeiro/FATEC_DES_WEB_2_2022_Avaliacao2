<?php

if($_SERVER["REQUEST_METHOD"]  == "POST"){
    session_start();
    if($_POST['nome'] == 'fatec' and $_POST['senha'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['nome'] = 'Fatec';
         header("location: inicio.php");
    }else{
        $_SESSION['loggedin'] = FALSE;
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nome">Digite seu nome de usuário: </label>
        <input type="text" id="nome" name="nome">
        <br>
        <label for="senha">Digite sua senha: </label>
        <input type="password" id="senha" name="senha">
        <br>
        <input type="submit" class="btn btn-info" name="Enviar" value="Entrar">
    </form>
    
</body>
</html>