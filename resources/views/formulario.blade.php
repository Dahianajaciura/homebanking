<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

<body>
<div class="container">
<div class="d-flex justify-content-center align-items-center">
<form action="operaciones.php" method="get">
        <div class="form-group">
        <label for="nombredelservicio" >Nombre del servicio </label>
          <input type="text" name="nombredelservicio" class="form-control" placeholder="Nombre del Servicio" required>
        </div>
        <div class="form-group">
        <label for="numeroderef" >Numero de Referencia </label>
          <input type="number" name="numeroderef" class="form-control" placeholder="Numero de Referencia" required>
        </div>
        <div class="form-group">
        <label for="password" >Contraseña </label>
          <input type="text" name="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <button type="submit"  class="btn btn-info" >
          Pagar Servicio
        </button>
      </form> 
</div>
      
      
</body>

</html>