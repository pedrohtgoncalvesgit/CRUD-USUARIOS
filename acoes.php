<?php
session_start();
require 'conexao.php';


// Criar Usuario
if (isset($_POST['create_usuario'])){
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nasc = mysqli_real_escape_string($conexao, trim($_POST['data_nasc']));
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']),PASSWORD_DEFAULT))  :'';

$sql = "insert into usuarios (nome,email,data_nasc,senha) values ('$nome','$email','$data_nasc','$senha')";

mysqli_query($conexao,$sql);

}

// Atualizar usuario
if (isset($_POST['create_usuario'])){
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nasc = mysqli_real_escape_string($conexao, trim($_POST['data_nasc']));
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']),PASSWORD_DEFAULT))  :'';

$sql = "insert into usuarios (nome,email,data_nasc,senha) values ('$nome','$email','$data_nasc','$senha')";

mysqli_query($conexao,$sql);

}



?>