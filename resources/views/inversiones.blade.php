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
      <div class="row">
        <div class="col">
          <div class="table-responsive ">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Empresa</th>
                  <th scope="col">Acciones</th>
                  <th scope="col">Valor de accion</th>
                  <th scope="col">Compraventa de Accion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Arcos Dorados</th>
                  <td>1000</td>
                  <td>100</td>
                  <td>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-toggle="modal"
                      data-target="#comprar"
                    >
                      Comprar
                    </button>
                    <button
                      type="button"
                      class="btn btn-success"
                      data-toggle="modal"
                      data-target="#vender"
                    >
                      Vender
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="comprar"
      tabindex="-1"
      role="dialog"
      aria-labelledby="este modal sirve para comprar"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="hola">
              Confirmacion de la transacción
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">Indique la cantidad que desea Comprar</div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input
              type="text"
              class="form-control"
              aria-label="Dollar amount (with dot and two decimal places)"
            />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">
              Confirma
            </button>
            <button type="button" class="btn btn-danger">
              Cancela
            </button>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="vender"
      tabindex="-1"
      role="dialog"
      aria-labelledby="este modal sirve para vender"
      aria-hidden="true"
    >

    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="holass">
              Confirmacion de la transacción
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">Indique la cantidad que desea Vender</div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input
              type="text"
              class="form-control"
              aria-label="Dollar amount (with dot and two decimal places)"
            />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">
              Confirma
            </button>
            <button type="button" class="btn btn-danger">
              Cancela
            </button>
          </div>
        </div>
      </div>
    </div>
    
  
  </body>
</html>
@endsection