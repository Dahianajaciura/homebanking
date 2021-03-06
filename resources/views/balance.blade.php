@extends('layouts.app')
@extends('layouts.navbar',[
'opcionBalance'=>"active"])


@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Balance</title>
  </head>
    <body class="d-flex flex-column h-100">
    <div class="jumbotron" id='balance'>
      <h1><b>Balance Financiero</b></h1>
      <div>Aca podes controlar los movimientos de tu cuenta</div>
    </div>

    <div class="container">
      <div class="alert alert-info" role="alert" style="margin-left: 5px;">
        <strong>Saldo ${{ $salario ?? '' }} </strong>
      </div>
    <table class="table text-center table-hover">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Importe</th>
        
        </tr>
      </thead>
      <tbody>
      @foreach ($balance as $item)
      <tr>
                <th scope="row">{{ date('d-m-Y', strtotime($item->fecha))  }}</th>
                <td>{{ $item->desc }}</td>
                <td>{{ $item->importe }}</td>
            </tr>
@endforeach
       
      </tbody>
      </table>
</div>
    <footer>
	    		<strong>
	        	© 2020 Djaciura - Todos los derechos reservados
	    		</strong>  
    </footer>

  </body>
</html>
@endsection