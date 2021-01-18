function buscar(sexo){
  let page = 'back.php';
  $.ajax({

    type: 'POST',
    dataType: 'html',
    url: page,
    beforeSend: function(){
      $("#resposta").html("Carregando");
    },
    data: {asdgayhkdasfgyukdftgyu: sexo},
    success: function(msg){
      $("#resposta").html(msg)
    }
  });
}

$("[name='buscar']").click(function(){
  buscar($("[name='sexo']").val())
});
