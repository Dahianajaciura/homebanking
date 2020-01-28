<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Home Banking</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


   @yield('content')

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   @yield('scripts')

</body>
</html>


{{-- Esto esta comentado en laravel. es la unica manera que funciona
 <div class="jumbotron jumbotron-fluid">
       <div class="container">
           <h1 class="display-4">{{ $jumboTitle }}</h1>
           <p class="lead">{{ $jumboDesc }}</p>
       </div>
   </div>

@if ($action >= 10)
    <p>El numero es mayor o igual a 10</p>
@elseif ($action >= 5)
    <p>El numero es mayor o igual a 5</p>
@else
    <p>El numero es menor a 5</p>
@endif


@for ($i = 0; $i <= $num; $i++)
    El valor de i es {{ $i }}, {{$num}} <br>
@endfor  --}}
