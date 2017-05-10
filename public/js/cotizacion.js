var bandera2=false;
  $(function() {
    var formulario=$("#oferta");
    var tablaDatos = $("#cuerpo");
    formulario.find("#proyecto").on("change",function(event){
      valor = $(this).val();
      //$a=valor; 
      
      var url2="ofertas/cotizaciones/"+valor;

    $.ajax({
        url:url2,
        dataType: 'json', 
        success: function(json) {
          $("#cuerpo").empty();
          $.getJSON(url2, function(res){
            $(res).each(function(key,value){
              tablaDatos.append("<tr><td>"+value.cantidad+"</td><td>"+value.descripcion+"</td><td><input type='text' class='form-control'></td><td><input type='text' class='preciou form-control'></td><td class='totaldes'>$0.00</td></tr>");
             });
          });
        }
    });
  });
});
