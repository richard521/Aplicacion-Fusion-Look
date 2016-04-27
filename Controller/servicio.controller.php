<?php
	# -> Controller: servicio
	#Author: Londoño Ochoa
	session_start();
	//hacemos conexion a la base de datos(fusion_look)
	require_once("../Model/dbconn.php");
	//traemos las clases necesarias
	require_once("../Model/servicio.class.php");
	//instanciamos las variables globales y una llamada "$accion"
	//"la variable accion nos indicara que parte del CRUD estamos creando"

	$accion=$_REQUEST["acc"];
	switch ($accion) {
		case 'C':
			# Create
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Servicio			=$_POST["Id_Servicio"];
			$Id_Empleado			=$_POST["Id_Empleado"];
			$Id_Centro				=$_POST["Id_Centro"];
			$Id_Tipo				=$_POST["Id_Tipo"];
			$Nombre					=$_POST["Nombre"];
			try {
				servicio::Create($Id_Servicio,$Id_Empleado,$Id_Centro,$Id_Tipo,$Nombre);
				$mensaje="Servicio registrado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'U':
			# Update
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Empleado			=$_POST["Id_Empleado"];
			$Id_Centro				=$_POST["Id_Centro"];
			$Id_Tipo				=$_POST["Id_Tipo"];
			$Nombre					=$_POST["Nombre"];
			try {
				servicio::Update($Id_Empleado,$Id_Centro,$Id_Tipo,$Nombre);
				$mensaje="Servicio actualizado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar el servicio, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'D':
			# Delete
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			try {
				$servi = servicio::Delete($_REQUEST["ui"]);
				$mensaje="Servicio eliminado con exito.(Esta accion es irreversible)";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar el servicio, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
	}
	//header("Location: ../Views/servicio.php?msn=$mensaje");
?>