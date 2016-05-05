<?php
	session_start();

	if(!isset($_SESSION["Id_usuario"])){
		$mensaje=("Debes iniciar sesion primero");
		$tipo_mensaje=("advertencia");

		header("Location: ../Views/login.php?m=".$mensaje."&t=".$tipo_mensaje);
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Prueba inicio de sesion</title>
	</head>
	<body>
		<h1>sesion activa <?php echo $_SESSION["Nombre"]; ?></h1>
		<a href="../Model/cerrarsesion.php">Cerrar sesion</a>
		<nav>
      		<?php include_once("../Model/menu.php"); ?>
    	</nav>
	</body>
	
</html>