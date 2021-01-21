<?php
include('conexao.php');



$cpf = $_POST['cpf_cliente'];
$status = $_POST['opçoes'];

$sql = "UPDATE pedidos SET status = '$status' WHERE cpf_cliente = '$cpf'";


$conn-close();
 ?>

<strong>Ediçao realizada</strong>
