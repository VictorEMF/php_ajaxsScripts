$(document).ready(function() {

  $("[name=submit]").click(function() {

    var cpf = $("[name=cpf]").val();
    var id = $("[name=id]").val();
    var status = $("[name=opçoes]").val();
    $.ajax({
      type: "POST",
      url: "../backend/editarStatus.php",
      data: {
                  cpf: cpf,
                  id: id,
                  status: status
      },
      cache: false,
      success: function(msg){
                  $("[name=resposta]").html(msg)
      },
      error: function(xhr, status, error) {
        console.error(xhr);
      }
    });
    
  });

});