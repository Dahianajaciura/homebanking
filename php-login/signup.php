<?php
require 'database.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>BIENVENID@</title>
  </head>
    <body>
        <header>
            <a href="/sites/coderhouse/homebanking/php-login"> DJBanking - HOMEBANKING </a>
        </header>
        <div id="contenedorDatos">
            <h1> Registrate</h1>  <span>o <a href="login.php"> Inicia sesion </a> </span> </div>
        </div> 

        <div id="contenedorLog">
        
        <form action="signup.php" method="post" id="formulariosesion">
        <br> <input type="text" name="email" placeholder="  Email"> </br>
        <br><input type="password" name="password" placeholder="  Contraseña"> </br>
        <br><input  class="btn btn-info" type="submit" value="Enviar"></br>
        </form>

        </div>
  </body>
</html>
