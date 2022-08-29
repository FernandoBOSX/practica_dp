function generarJson()
{
    generarJsonAjax();
    ejecutarJsonPhp();
}


function ejecutarJsonPhp()
{  
    jQuery.ajax({
        type: "POST",
        url: '../php/api.php',
        dataType: 'json',
        data: {nombrefuncion: 'generarJson'},
    })
        .done(function(respuesta) {
            respuesta;  
         })
}

function generarJsonAjax()
{
 
  var valorRetorno = 0;
  $.ajax({
    url: "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items",
    type: 'GET',
    dataType: 'json',
    async: false,
  })
  .done(function(respuesta) {
     respuesta;
     for(i = 0; i< respuesta.length;i++)
     {
        if(respuesta[i]['color'] != 'green')
        {
            delete respuesta[i];
        }
     }
     respuesta;
     txtJson = JSON.stringify(respuesta);
     $("#textoJson").text(txtJson);
  })
  .fail(function(error) {
   
  });
  return valorRetorno;
}

