<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos_usuario.css">
	  <!--<link rel="stylesheet" type="text/css" href="estilos/estilos_usuario.css">-->
	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert-master/dist/sweetalert.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Registro centros</title>
  <nav class="cyan darken-1">
    <div class="nav-wrapper">
      <a href="pruebahome.php" class="brand-logo" id="titulo">Fusion-Look</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
</head>
<body>
	<section >
		<div class="row">
			<form action="../Controller/centro_servicio.controller.php" method="POST" class="col s12">
				<div class="row">
					<h3>Registro centro nuevo</h3>
						<article>
							<div class="input-field col s12">
								<input type="number" name="Id_ciudad" class="validate" required>
								<label for="Id_ciudad">Ciudad</label>
							</div>
							<div class="input-field col s12">
								<input type="text" name="Nombre" class="validate" required>
								<label for="Nombre">Nombre centro</label>
							</div>
							<div class="input-field col s12">
								<input type="text" name="Direccion" class="validate" required>
								<label for="Direccion">Direccion</label>
							</div>
							<div class="input-field col s12">
								<input type="email" name="Email" class="validate" required>
								<label for="Email">Correo electronico</label>
							</div>
							<div class="input-field col s12">
								<input type="number" name="Telefono" class="validate" required/>
								<label for="Telefono">Telefono</label>
							</div>
							<br>
								<a href="pruebahome.php" class="waves-effect waves-light btn red darken-1 left tooltipped" data-tooltip="Volver" data-position="top">Cancelar</a>
								<button class="waves-effect waves-light  btn right cyan darken-1 tooltipped" data-tooltip="Crear" data-position="top" name="acc" value="C">Enviar</button>
							</div>
						</article>
				
			</form>
			<?php echo @$_GET["msn"]; ?>
		</div>
	</section>
		

	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	  <script src="sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
</body>
</html>