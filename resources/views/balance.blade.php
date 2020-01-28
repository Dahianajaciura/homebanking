@extends('layouts.app')
@extends('layouts.navbar',[
'opcionBalance'=>"active"])


@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Balance</title>
  </head>
  


<body class="d-flex flex-column h-100">

 
    <div class="jumbotron" id='balance'>
      <h1><b>Balance Financiero</b></h1>
      <div>Aca podes controlar los movimientos de tu cuenta</div>
    </div>

<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Importe</th>
          <th scope="col">Saldo</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($balance as $item)
	<tr>
		<td>{{$item->fecha}}</td>
	    <td>{{$item->desc}}</td>
      <td>{{$item->importe}}</td>
      <td>{{$item->Saldo}}</td>
	</tr>
@endforeach
       
      </tbody>
       


    </table>
 

</div>
  </body>
</html>
@endsection