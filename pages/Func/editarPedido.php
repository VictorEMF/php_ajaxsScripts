<form  action="" method="post">
  <p><strong>CPF do cliente: </strong>
  <input type="text" name="cpf_cliente" value=""></P>
  <strong>Status do Pedido:</strong>
  <select name="opçoes">
    <option value="Na fila para pintar">Na fila para pintar</option>]
    <option value="Pintando">Pintando</option>
    <option value="Finalizado">Finalizado</option>
  </select>
  <p><button type="submit" name="editar">Editar</button><p>
</form>

<div id="resposta">

</div>

<script src="../../ajax/ajaxx.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
