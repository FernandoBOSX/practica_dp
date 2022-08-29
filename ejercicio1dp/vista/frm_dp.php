
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<head>
  <meta charset="utf-8">
  <title>PRACTICA DP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
     <div class="col-md-12" style="text-align:center">
      <h1 style='margin-top:50px'>PRACTICA DP</h1>
      <br>
    </div>
<table style="width: 450px;" align="center">
<tbody>
<tr>
<td style="width: 440px;" align="center">&nbsp;</td>
</tr>
<tr>
<td style="height:60px; width: 490px;" onclick = "generarJson();" align="center"><button style="width:250px" name="btnAceptar" id="btnAceptar" class="btn btn-primary btn-lg"  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">GENERAR JSON </button></td>
</tr>
</tbody>
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">JSON JS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="textoJson"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

      


</body>
<script  src="../js/js_generarjson.js"></script>
<script  src="../js/jquery-3.6.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script  src="../php/api.php"></script>

</html>
