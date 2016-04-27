<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="estilos/estilos_login.css">
	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert-master/dist/sweetalert.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Iniciar sesión</title>
</head>
<body background="images/fondo.jpg">

	<h3 id="titulo">Fusion-look</h3>
	<section>
		<div class="row">
			<form action="../Controller/usuario.controller.php" method="POST" class="col s12" novalidate>
				<div class="row">
					<h3>Iniciar sesión</h3>
						<article>
							<div class="input-field col s12">
								<input type="text" name="Email" class="validate" required>
								<label for="Email">Correo electronico</label>
							</div>
							<div class="input-field col s12">
								<input type="password" name="Clave" class="validate" required>
								<label for="Clave">Contraseña</label>
								<p>
									<input type="checkbox" name="Recordar" id="recordar" required value="recordar">
									<label for="Recordar">Mantener activa la sesión.</label>
								</p>
								<br>
								<button class="waves-effect waves-light btn right cyan darken-1" id="envio" name="acc" value="L">Iniciar sesión</button>
								<a href="registro_usuario.php" class="waves-effect waves-light btn right red darken-1" id="cancelar">Registrate</a>
								
								<div class="textos">
									<a href="#" aling="center">Olvide mi contraseña</a>
								</div>
							</div>				
						</article>
				</div>
			</form>

		</div>
	</section>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script src="sweetalert/sweetalert-master/dist/sweetalert.min.js"></script> 
</body>
</html>