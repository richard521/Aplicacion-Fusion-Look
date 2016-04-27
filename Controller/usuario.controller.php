<?php
	# -> Controller: usuario
	#Author: Londoño Ochoa
	session_start();
	//hacemos conexion a la base de datos(fusion_look)
	require_once("../Model/dbconn.php");
	//traemos las clases necesarias
	require_once("../Model/usuario.class.php");
	//instanciamos las variables globales y una llamada "$accion"
	//"la variable accion nos indicara que parte del CRUD estamos creando"

	$accion=$_REQUEST["acc"];
	switch ($accion) {
		case 'C':
			# Create
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Usuario				=$_POST["Id_Usuario"];
			$Nombre					=$_POST["Nombre"];
			$Apellido				=$_POST["Apellido"];
			$Clave					=$_POST["Clave"];
			$Email					=$_POST["Email"];
			$Telefono				=$_POST["Telefono"];
			$Sexo					=$_POST["Sexo"];
			$Estado					=$_POST["Estado"];
			try {
				usuario::Create($Id_Usuario,$Nombre,$Apellido,$Clave,$Email,$Telefono,$Sexo,$Estado);
				$mensaje="Usuario registrado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			header("Location: ../Views/login.php?msn=$mensaje");
			break;
		case 'U':
			# Update
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Nombre					=$_POST["Nombre"];
			$Apellido				=$_POST["Apellido"];
			$Clave					=$_POST["Clave"];
			$Email					=$_POST["Email"];
			$Telefono				=$_POST["Telefono"];
			$Sexo					=$_POST["Sexo"];
			$Estado					=$_POST["Estado"];
			try {
				usuario::Update($Nombre,$Apellido,$Clave,$Email,$Telefono,$Sexo,$Estado);
				$mensaje="Usuario actualizado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar el usuario, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'D':
			# Delete
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			try {
				$usuario = usuario::Delete($_REQUEST["ui"]);
				$mensaje="Usuario eliminado con exito.(Esta accion es irreversible)";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar el usuario, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'L':
			#Login
			#inicializar las variables que enviara el formulario y las que se validaran en la tabla
			$Email_usuario		=$_POST["Email"];
			$Clave				=$_POST["Clave"];

			try {
				$usuario = usuario::Login($Email,$Clave);

				#utilizamos el metodo count para contar la cantidad de registros que retorna la consulta
				$usuario_existe = count($usuario[0]);

				if($usuario_existe == 0){
					$mensaje=("Usuario o contraseña incorrectos.");
					$tipo_mensaje=("advertencia");

					header("Location: ../View/login.php?m=".$mensaje."&t".$tipo_mensaje);
				}else{
					#creamos variables de session

					$_SESSION["Id_Usuario"]				= $usuario[0];
					$_SESSION["Email"]					= $usuario[4];
					$_SESSION["Nombre"]					= $usuario[2];

					header("Location: ../View/inicio.php?");
				}
			}catch(Exception $e){
				$mensaje=("Lo sentimos, ocurrio un error ".$e->getMessage());
				$tipo_mensaje=("error");

				header("Location: ../View/login.php?m=".$mensaje."&t".$tipo_mensaje);
			}
	}
	// 
?>