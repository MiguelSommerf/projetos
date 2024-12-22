<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'artistas';
$conn = new mysqli($host, $user, $passwd, $database);

if($conn->connect_error){
    die("Falha na conexão com o banco." . $conn->errno);
    exit;
}else{
    echo "Conexão bem-sucedida!";
    header('location: ../login/login.php');
};
?>