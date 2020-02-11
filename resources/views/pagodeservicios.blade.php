@extends('layouts.app')
@extends('layouts.navbar',[
'opcionPago'=>"active"])


@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <title>Pago de Servicios</title>
  </head>

  <body class="d-flex flex-column h-100">
    <div class="jumbotron" id='pagodeservicios'>
      <h1><b>Pago de Servicios</b></h1>
      <div>Paga todo lo que necesites desde la comodidad de tu casa</div>
    </div>





    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">

        @if ($success ?? '' === true)
        <p> Se realizo un pago </p>
         @else

         
        @if ($error != '')

        <p> {{$error}} </p>
           @else



          <form action="{{action('PagoDeServiciosController@pagoDeServicios')}}" method='post'>
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre del Servicio</label>
              <input type="nombredelservicio" id="nombre" name='nombre' class="form-control" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Numero de referencia</label>
              <input type="number" id="referencia" name='referencia' class="form-control" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Importe</label>
              <input type="number" id="importe" name='importe' class="form-control" />
            </div>
      
            <input type="submit" class="btn btn-info" id="exampleModal" value="Pagar Servicio">
          </form>
          @endif
          @endif
        </div>
      </div>
    </div>


    
   <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmacion de Operacion</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"> Usted esta seguro?</div>
          <div class="modal-footer">
            <button
            id="payService"
              type="button"
              class="btn btn-success"
              data-dismiss="modal"
            >
              si,estoy seguro
            </button>
            <button type="button" class="btn btn-danger">no, mejor luego</button>
          </div>
        </div>
      </div> 
    </div>

  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

 
  </body>
  
</html>
@endsection

