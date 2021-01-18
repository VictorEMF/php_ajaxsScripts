<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cliente</title>
  </head>
  <body>
    <?php
      if(isset($_SESSION['usuario_existe'])):
     ?>
     <h3>Usuario Existente</h3>
     <?php
      endif;
      unset($_SESSION['usuario_existe']);
      ?>
      <?php if(isset($_SESSION['status_cadastro'])): ?>
        <h3>Usuario Cadastrado</h3>
      <?php
      endif;
      unset($_SESSION['status_cadastro']);
       ?>

    <?php
      if(isset($_SESSION['usuario_embranco'])):
     ?>
     <h3>Usuario esta em branco</h3>
     <?php
      endif;
      unset($_SESSION['usuario_embranco']);
      ?>
    <form action="./backend/cadastro.php" method="post">
      <p> <input type="text" name="cpf" placeholder="CPF: "> </p>
      <p> <input type="text" name="nome" placeholder="Nome: "> </p>
      <p> <input type="text" name="email" placeholder="Email: "> </p>
      <p> <input type="text" name="tel" placeholder="Telefone: "> </p>
      <p> <input type="password" name="senha" placeholder="Senha: "> </p>
      <button type="submit">Enviar</button>
    </form>
    <hr>
    <form action="./backend/login.php" method="post">
      <p> <input type="text" name="cpf" placeholder="CPF: "> </p>
      <p> <input type="text" name="senha" placeholder="Senha: "> </p>
      <button type="submit">Login Cliente</button>
    </form>
    <hr>
    <form action="./backend/loginFun.php" method="post">
      <p> <input type="text" name="cpf" placeholder="CPF: "> </p>
      <p> <input type="password" name="senha" placeholder="Senha: "> </p>
      <button type="submit">Login Funcionario</button>
    </form>
  </body>
</html>
