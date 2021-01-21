<?php
session_start();
require_once('conexao.php');

if(empty($_POST['cpf']) or empty($_POST['senha'])) {
    header('Location: ../index.php');
}


$cpf= mysqli_real_escape_string($conn, $_POST['cpf']);
$senha= mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT * FROM funcionarios WHERE cpf = '{$cpf}' AND senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$dados = mysqli_fetch_array($result);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $dados['nome'];
    header('Location: ../pages/pageFun.php');
}else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
}

$conn->close();

?>
