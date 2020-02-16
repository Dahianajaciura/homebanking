@extends('layouts.app')
@extends('layouts.navbar',[
'opcionIndex'=>"active"])


@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css" />
    <title>Home</title>
  
  </head>

  <body class="d-flex flex-column h-100">
    
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-5">Bienvenido a <b>DJ</b>Banking, que querés hacer hoy?</h1>
        En este sitio poder operar con tu cuenta mirando tu <b>balance</b>, haciendo
        transferencias,<b> pagando servicios</b> y armando <b>inversiones</b>!
      </div>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <div id = 'balanceimg'><img src="./imagenes/balance.png" width="300px"></div>
            <h3 class="card-title pricing-card-title"><b>Balance</b></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Mira como vienen sus cuentas Ingresos y Egresos</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-info" onclick="window.location.href='balance'">
            Ver Situación Económica
            </button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
              <div id = 'pagodeserviciosimg'><img src="imagenes/pago de servicios.png" width="300px"></div>
            <h3 class="card-title pricing-card-title"><b>Pago de Servicios</b></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Paga todo lo que necesites desde la comodidad de tu casa</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-info" onclick="window.location.href='pagodeservicios'">
             Pagar Servicios
            </button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
              <div id = 'inversionesimg'><img src="imagenes/inversiones.png" width="300px"></div>
            <h3 class="card-title pricing-card-title"><b>Inversiones</b></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Duplica tus ahorros en el mercado financiero</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-info" onclick="window.location.href='inversiones'">
               Invertir en cosas
            </button>
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
</html>
@endsection
​ ​ ​
<!-- <body> 
 <nav class="navbar navbar-light bg-light">
<div class="container">
  <h2>Panel Group</h2>
  <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
  
</nav>
​
​
</body> -->
<!-- 
---Navbar: Va a contener las secciones del sitio.
Home: Página que explica el uso del sitio.
Balance: Tabla que muestra nuestros ingresos y egresos.
Pago de Servicios: Formulario donde ingresamos un servicio y lo pagamos.
Inversiones: Página que nos va a dar dinero por inversiones ficticias armadas
para evitar quedarnos sin nada. -->
