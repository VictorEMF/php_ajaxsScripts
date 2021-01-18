function load_page(arquivo){
  if(arquivo){
    $.ajax({
      type: 'POST',
      data: arquivo,
      url: arquivo,
      success: function(data){
        $("#conteudo").html(data);
      }

    });
  }
}
