<?php
session_start();
include('conexao.php');

$data['cpf'] = $_POST['cpf'];
$data['id'] = $_POST['id'];
$data['status'] = $_POST['status']; 
$info = json_encode($data);
$dados =  json_decode($info, true);

if($dados['cpf'] != "" and $dados['id']) {
    $sql = "UPDATE pedidos SET status = '{$dados['status']}' WHERE cpf_cliente = '{$dados['cpf']}' AND id = {$dados['id']}";
    $result = mysqli_query($conn, $sql);
    echo "Atualizado amigo";
}else{
    echo "Falta dados!";
}

?>