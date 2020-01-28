@extends('layouts.app', [
       'jumboTitle' => 'Balance Financiero',
       'jumboDesc' => 'Aca podes controlar los movimientos de tu cuenta',
       'action'=>'10',
       'num'=>5
   ])

@section('content')

<body class="d-flex flex-column h-100">
<header>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse">
    <a class="navbar-brand" href="./ahora.blade.php">Home Banking</a>
    <ul class="navbar-nav mr-auto">
    <!--       class active resalta la opción seleccionada -->
    <li class="nav-item ">
            <a class="nav-link" href="./ahora.blade.php">Home</a>
          </li>
      ​
          <li class="nav-item active">
            <a class="nav-link" href="./balance.blade.php">Balance</a>
          </li>
      ​
          <li class="nav-item">
            <a class="nav-link" href="./pagodeservicios.blade.php">Pago de Servicios</a>
          </li>
      ​
          <li class="nav-item">
            <a class="nav-link" href="./inversiones.blade.php">Inversiones</a>
          </li>
  </ul>
  </div>
</nav>
</header>
 
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
        <tr>
          <th scope="row">29/04/2019</th>
          <td>Salario</td>
          <td>100</td>
          <td>1000</td>
        </tr>
      </tbody>
    </table>
</div>




@endsection