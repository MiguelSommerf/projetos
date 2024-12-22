<?php
session_start();
require_once '../bd/connect.php';

if(isset($_SESSION['usuario']) && isset($_SESSION['senha'])){
    $sql = "INSERT INTO usuario (id_nome, nome_usuario, senha_usuario) VALUES(DEFAULT, ?, ?)";
    $_SESSION['senha'] = password_hash($_SESSION['senha'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_SESSION['usuario'], $_SESSION['senha']);

    if($stmt->execute()){
        echo "Usuário cadastrado com sucesso!";
        header('location: ../login/login.php');
        exit;
    }else{
        echo "Falha ao cadastrar o usuário. Tente novamente." . $stmt->error;
        header('location: cadastro.php');
        exit;
    };
}else{
    echo "Usuário não encontrado. Insira os dados corretamente.";
    header('location: cadastro.php');
    exit;
};
?>