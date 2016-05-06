<?php
	session_start();

	if(!isset($_SESSION["Id_usuario"])){
		$mensaje=("Debes iniciar sesion primero");
		$tipo_mensaje=("advertencia");

		header("Location: ../Views/login.php?m=".$mensaje."&t=".$tipo_mensaje);
	}
	require_once("../Model/dbconn.php");
	require_once("../Model/cita.class.php");
	$cita = cita::ReadbyId($_REQUEST["cii"]);
?>
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
	<title>Editar usuario</title>
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
			<form action="../Controller/cita.controller.php" method="POST" class="col s12">
				<div class="row">
					<h3>Modificar cita</h3>
						<article>
							<div class="input-field col s12">
								<input type="number" name="Id_cita" class="validate" value="<?php echo $cita[0] ?>" readonly>
								<label for="Id_cita">Cita</label>
							</div>
							<div class="input-field col s12">
								<input type="number" name="Id_usuario" class="validate" value="<?php echo $cita[1] ?>" >
								<label for="Id_usuario">Usuario</label>
							</div>
							<div class="input-field col s12">
								<input type="number" name="Id_empleado" class="validate" value="<?php echo $cita[2] ?>" >
								<label for="Id_empleado">Empleado</label>
							</div>
							<div class="input-field col s12">
								<input type="text" class="datepicker validate" name="Fecha_cita" value="<?php echo $cita[3] ?>">
								<label for="Fecha_cita">Fecha</label>
							</div>
							<br>
								<a href="pruebahome.php" class="waves-effect waves-light btn red darken-1 left tooltipped" data-tooltip="Volver" data-position="top">Cancelar</a>
								<button class="waves-effect waves-light  btn right cyan darken-1 tooltipped" data-tooltip="Modificar" data-position="top" name="acc" value="U">Enviar</button>
							</div>
						</article>
				
			</form>
			<!--<?php //echo @$_GET["msn"]; ?>-->
		</div>
	</section>
		

	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.js"></script>	
      <script type="text/javascript">
      	$('.datepicker').pickadate({
    		selectMonths: true,
    		selectYears: 15 
  		});
      </script>
      <script src="sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
</body>
</html>