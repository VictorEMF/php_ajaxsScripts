<?php
session_start();
include('../../backend/conexao.php');
$sql = "SELECT * FROM clientes";
$query = mysqli_query($conn, $sql);
$qtd = mysqli_num_rows($query);
 ?>

 <?php
 if($qtd>0){
 ?>
 <table class="table table-striped table-advance table-hover">
     <tbody>
         <tr>
             <th><i class="icon_profile"></i>CPF</th>
             <th><i class="icon_profile"></i>Nome</th>
             <th><i class="icon_mail_alt"></i>Telefone</th>
             <th><i class="icon_mail_alt"></i>Email</th>
         </tr>
         <?php
         while($linha = mysqli_fetch_assoc($query)){
         ?>
         <tr>
             <td><?=$linha['cpf'];?></td>
             <td><?=$linha['nome'];?></td>
             <td><?=$linha['telefone'];?></td>
             <td><?=$linha['email'];?></td>
         </tr>
         <?php }?>
     </tbody>
 </table>
 <?php }else{?>
 <h4>Nao foram encontrados registros com esta palavra.</h4>
 <?php }?>
</section>
