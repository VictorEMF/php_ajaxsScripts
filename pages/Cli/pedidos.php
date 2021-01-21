<?php
session_start();
include('../../backend/verificar_login.php');
include('../../backend/conexao.php');
$nome = $_SESSION['usuario'];
$sql = "SELECT ped.nome, ped.status 
FROM pedidos ped 
JOIN clientes cli ON cli.cpf = ped.cpf_cliente WHERE cli.nome = '$nome'";
$query = mysqli_query($conn, $sql);
$qtd = mysqli_num_rows($query);
?>

<section class="panel col-lg-9">

    <header class="panel-heading">
        Seus Pedidos:
    </header>
    <?php
    if($qtd>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i>Nome</th>
                <th><i class="icon_profile"></i>Status</th>
            </tr>
            <?php
            while($linha = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$linha['nome'];?></td>
                <td><?=$linha['status'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Não foram encontrado pedidos na sua conta.</h4>
    <?php }?>
</section>
