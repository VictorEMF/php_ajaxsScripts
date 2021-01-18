<?php
include('conexao.php');

$sql = "SELECT * FROM clientes";

$query = mysqli_query($conn, $sql);
$qtd = mysqli_num_rows($query);


?>