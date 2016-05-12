<?php
  session_start();

  if(isset($_SESSION["Id_usuario"])){
    header("Location: pruebainicio.php");
  }
  
  //preguntar uso de funcion para omitir ciertos errores
  //error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="estilos/home.css">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <title>Fusion-Look tus citas en un solo click</title>
</head>
<body>
  <header>
    <nav class="cyan darken-1">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo" id="titulo">Fusion-Look</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="login.php">Iniciar sesión</a></li>
        </ul>
      </div>
    </nav>
  </header>
    <div class="slider" >
    <ul class="slides">
      <li>
        <img src="images/fondo.jpg">
        <div class="caption right-align">
          <p class="titulo">Fusion-Look</p>
          <h5 class="light grey-text text-lighten-3">El sitio web para todas tus citas</h5>
        </div>
      </li>
      <li>
        <img src="images/salon.jpg">
        <div class="caption left-align" >
          <p class="titulo">Salones de belleza</p>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="images/barberia.jpg">
        <div class="caption left-align">
          <p class="titulo">Barberias</p>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="images/masajes.jpg">
        <div class="caption right-align">
          <p class="titulo">Masajes & Spa</p>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s7 red"><span class="flow-text"></span></div>
      <div class="col s5 blue"><span class="flow-text"></span></div>

    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/barberia.jpg"></div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/slider-2.jpg"></div>
  </div>

  
</body>
      
      <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.js"></script>
      <script> 
        $(document).ready(function(){
          $('.parallax').parallax();
          $('.slider').slider({
            indicators: false,
            interval: 4000,
            transition: 700,
            height:  500          
          });
        });
      </script>
</html>