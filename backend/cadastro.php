<?php
session_start();
include('conexao.php');

$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conn, trim($_POST['tel']));
$senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

if(empty($cpf) or empty($nome) or empty($email) or empty($telefone) or empty($senha)){
    $_SESSION['usuario_embranco'] = true;
    header('Location: ../cliente.php');
    exit();
}

$sql = "SELECT COUNT(*) as total FROM clientes WHERE cpf = '$cpf'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: ../cliente.php');
    exit();
}

$sql = "INSERT INTO clientes(cpf,nome,email,telefone,senha) VALUES ('$cpf','$nome','$email','$telefone','$senha')";

if($conn->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conn->close();

header('Location: ../cliente.php');
exit();
