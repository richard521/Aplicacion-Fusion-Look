<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de usuarios</title>
</head>
<body>
	<form action="../Controller/usuario.controller.php" method="POST">
		<input type="text" name="Id_Usuario" placeholder="Id_usuario" value="1" readonly>
		<input type="text" name="Nombre" placeholder="Nombre" required>
		<input type="text" name="Apellido" placeholder="Apellido" required>
		<input type="password" name="Clave" placeholder="Contraseña" required>
		<input type="email" name="Email" placeholder="Correo electronico" required>
		<input type="number" name="Telefono" placeholder="Telefono" required>
		<!--modificar sexo y estado con datos fijos-->
		<input type="text" name="Sexo" placeholder="Sexo" required>
		<input type="text" name="Estado" placeholder="Estado" required>
		<button name="acc" value="C">Enviar</button>
	</form>
</body>
</html>