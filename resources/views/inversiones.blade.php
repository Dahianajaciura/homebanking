@extends('layouts.app')
@extends('layouts.navbar',[
'opcionInversiones'=>"active"])


@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <title>Inversiones</title>
  </head>

  <body class="d-flex flex-column h-100">
    <div class="jumbotron">
      <h1><b>Inversiones</b></h1>
      <div>Duplica tus ahorros en el mercado financiero</div>
    </div>
    <div class="container">
  <div class="alert alert-secondary" role="alert" style="margin-left: 5px;">
  <strong>Saldo en Pesos ${{ $salario->peso }} <br> Saldo en Dolar ${{ $salario->dolar }}<br> Saldo en Euro ${{ $salario->euro }}</strong>
  </div>
  <form action="{{action('InversionesController@inversiones')}}" method='post'>
    <table class="table text-center table-hover">
      <thead>
        <tr>
          <th scope="col">Moneda</th>
          <th scope="col">Valor</th>
          <th scope="col">Compra / Venta</th>
        </tr>
      </thead>
      <tbody>
  </form>
      @foreach ($inversiones as $inv)
        <tr>
          <td>{{$inv->Moneda}}</td>
          <td>{{$inv->Valor}}</td>
          <td class="text-center">
          <input type="button" onclick="abrirForm('Comprar', '{{$inv->Moneda}}');" class="btn btn-success" value="Comprar">
          <input type="button" onclick="abrirForm('Vender', '{{$inv->Moneda}}');" class="btn btn-danger" value="Vender">
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
<!-- Modal Form -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="modalFormLabel"></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <form method="post">
    <div class="form-group">
    <label for="acciones">Acciones:</label>
    <input type="number" class="form-control" id="acciones" name="acciones" value="100" min="1" max="10000">
    <input type="hidden" id="operacion" name="operacion" value="">
    <input type="hidden" id="moneda" name="moneda" value="">
    </div>
    </form>
    <div id="message"></div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-primary" id="btnAceptar">Aceptar</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCancelar">Cancelar</button>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
<footer background-color>
      <div style="text-align: center;">
        <div class="allrights"> 
	    		<strong>
	        	© 2020 Djaciura - Todos los derechos reservados
	    		</strong> 
	    	</div>
      </div>  
    </footer>

</body>
@endsection
@section('scripts')
<script>
function abrirForm(operacion, moneda) {
  $('#operacion').val(operacion);
  $('#modalFormLabel').html("<p>" + operacion + ": <b>" + moneda + "</b></p>");
  $('#moneda').val(moneda);
  $("#btnAceptar").show();
  $("#btnCancelar").text("Cancelar");
  $('#modalForm').modal("show");
}

$("#btnAceptar").click(function() {
  var datos = {operacion:$("#operacion").val(), moneda:$("#moneda").val(), acciones:$("#acciones").val()};

  if ($("#operacion").val() == "Comprar") {
    var url = 'inversiones/comprar';
  } else {
    var url = 'inversiones/vender';
  }

  $.ajax({
    type:'POST',
    url:url,
    data:datos,
    success:function(data){
      $("#message").html(data.message);
      $("#message").show();
      $("#btnAceptar").hide();
      $("#btnCancelar").text("Cerrar");
    }
  });
});

$("#btnCancelar").click(function() {
  $("#message").hide();
  $("#modalForm").modal("hide");
});
</script>
@endsection