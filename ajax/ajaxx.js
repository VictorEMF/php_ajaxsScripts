function buscar(opçoes){
  let page = '../backend/editarStatus.php';
  $.ajax({

    type: 'POST',
    dataType: 'html',
    url: page,
    beforeSend: function(){
      $("#resposta").html("Carregando");
    },
    data: {opçoes: opçoes},
    success: function(msg){
      $("#resposta").html(msg)
    }
  });
}

$("[name='editar']").click(function(){
  buscar($("[name='opçoes']").val())
});
