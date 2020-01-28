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
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre del Servicio</label>
              <input type="nombredelservicio" id="nombredelservicio" class="form-control" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Numero de referencia</label>
              <input type="number" id="referencia" class="form-control" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Importe</label>
              <input type="number" id="importe" class="form-control" />
            </div>
            <button
           
              type="button"
              class="btn btn-info"
              data-toggle="modal" data-target="#exampleModal"
            >
              Pagar Servicio
            </button>
          </form>
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

  

  

 
  </body>
  
</html>
@endsection