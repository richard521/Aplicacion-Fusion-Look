<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h1>inicio de prueba <?php echo $_SESSION["Nombre"];  ?></h1>
    <a href="cerrarsesion.php">cerrar sesion</a>
    <nav>
      <?php include_once("comp.menu.php"); ?>
    </nav>
</body>
</html>