<?php
session_start();
require_once '../bd/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="verificacao.php" method="post">
        <label>Usuário</label>
        <input type="text" name="usuario" placeholder="Digite o seu nome de usuário:">

        <label>Senha</label>
        <input type="text" name="senha" placeholder="Digite a sua senha:">

        <input type="submit" value="Enviar">
    </form>
    <a href="cadastro.php">Ainda não fez o cadastro? Cadastre-se aqui.</a>
</body>
</html>