<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos_usuario.css">
	  <!--<link rel="stylesheet" type="text/css" href="estilos/estilos_usuario.css">-->
	  <!--Import Google Icon Font-->
	  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert-master/dist/sweetalert.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Registro usuarios</title>
  <nav class="cyan darken-1">
    <div class="nav-wrapper">
      <a href="pruebahome.php" class="brand-logo" id="titulo">Fusion-Look</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">Iniciar sesión</a></li>
      </ul>
    </div>
  </nav>
</head>
<body>
	<section >
		<div class="row">
			<form action="../Controller/empleado.controller.php" method="POST" class="col s12">
				<div class="row">
					<h3>Registro usuario nuevo</h3>
						<article>
							<div class="input-field col s12">
								<input type="number" name="Id_usuario" class="validate" required>
								<label for="Id_usuario">Usuario</label>
							</div>
							<div class="input-field col s12">
								<input type="number" name="Id_centro" class="validate" required>
								<label for="Id_centro">Centro de servicio</label>
							</div>
							<div class="input-field col s12">
								<input type="number" name="Id_servicio" class="validate" required>
								<label for="Id_servicio">Servicio</label>
							</div>
							<div class="input-field col s12">
								<input type="text" name="Cargo" class="validate" required>
								<label for="Cargo">Cargo</label>
							</div>
							<div class="input-field col s12">
								<input type="text" name="Disponibilidad" class="validate" required>
								<label for="Disponibilidad">Disponibilidad</label>
							</div>
								<br>
								<a href="pruebahome.php" class="waves-effect waves-light btn red darken-1 left tooltipped" data-tooltip="Volver" data-position="top">Cancelar</a>
								<button class="waves-effect waves-light  btn right cyan darken-1 tooltipped" name="acc" value="C" data-tooltip="Registrar" data-position="top">Enviar</button>
							</div>
						</article>
				
			</form>
			
		</div>
	</section>
		

	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script src="sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	  <script type="text/javascript">
	  	$(document).ready(function() {
    	$('select').material_select();
  		});
	  </script>
</body>
</html>