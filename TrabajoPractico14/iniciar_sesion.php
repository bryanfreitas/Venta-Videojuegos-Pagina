<?php
    include("conexion.php");
?>
<html>
    <head>
        <title>Login Basico</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="registro.php">Registrase <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iniciar_sesion.php">Iniciar Sesion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pedidos.php">Pedidos</a>
      </li>
    </ul>
  </div>
</nav>
    <body>
         <div class="row">
            <form class="col s12" action="login.php" method="post">
              <div class="row">
                <div class="input-field col s6">
                  <input type="text" class="validate" name="nombre" required>
                  <label>Nombre de usuario</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input type="password" class="validate" name="pwd" required>
                  <label>Contraseña</label>
                </div>
              </div>
               <button class="btn waves-effect waves-light" type="submit">Iniciar Sesion
                </button>
            </form>
          </div>
    </body>
</html>
