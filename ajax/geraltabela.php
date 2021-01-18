<?php
session_start();
include('conexao.php');

$id = $_POST['id'];

$sql = "SELECT * FROM pessoas WHERE id LIKE '%$id%'";
$query = mysqli_query($conn, $sql);
$qtd = mysqli_num_rows($query);
?>
<section class="panel col-lg-9">

    <header class="panel-heading">
        Dados da busca:
    </header>
    <?php
    if($qtd>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Id</th>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_mail_alt"></i> Sexo</th>
                <th><i class="icon_mail_alt"></i> Idade</th>
            </tr>
            <?php
            while($linha = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$linha['id'];?></td>
                <td><?=$linha['nome'];?></td>
                <td><?=$linha['sexo'];?></td>
                <td><?=$linha['idade'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>
