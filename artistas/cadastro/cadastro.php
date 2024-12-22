<?php 
session_start();
require_once '../bd/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>
<body>
    <center>
    <h2>Cadastro</h2>
    <br>
    <form action="processa_cadastro.php" method="post">
        <label>Usuário</label>
        <input type="text" name="usuario" placeholder="Digite o seu nome de usuário:">

        <label>Senha</label>
        <input type="text" name="senha" placeholder="Digite a sua senha:">

        <input type="submit" value="Enviar">
    </form>
    </center>
</body>
</html>