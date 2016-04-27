<?php
	# -> Controller: usuario
	#Author: Londoño Ochoa
	session_start();
	//hacemos conexion a la base de datos(fusion_look)
	require_once("../Model/dbconn.php");
	//traemos las clases necesarias
	require_once("../Model/cita.class.php");
	//instanciamos las variables globales y una llamada "$accion"
	//"la variable accion nos indicara que parte del CRUD estamos creando"

	$accion=$_REQUEST["acc"];
	switch ($accion) {
		case 'C':
			# Create
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Cita					=$_POST["Id_Cita"];
			$Id_Usuario					=$_POST["Id_Usuario"];
			$Id_Promocion				=$_POST["Id_Promocion"];
			$Id_Empleado				=$_POST["Id_Empleado"];
			$Fecha_Cita					=$_POST["Fecha_Cita"];
			
			try {
				cita::Create($Id_Cita,$Id_Usuario,$Id_Promocion,$Id_Empleado,$Fecha_Cita);
				$mensaje="Cita agendada con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			header("Location: ../Views/cita.php?msn=$mensaje");
			break;
		case 'U':
			# Update
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Promocion				=$_POST["Id_Promocion"];
			$Id_Empleado				=$_POST["Id_Empleado"];
			$Fecha_Cita					=$_POST["Fecha_Cita"];
			try {
				cita::Update($Id_Promocion,$Id_Empleado,$Fecha_Cita);
				$mensaje="Cita actualizada con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar la cita, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'D':
			# Delete
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			try {
				$cita = cita::Delete($_REQUEST["ui"]);
				$mensaje="Cita eliminada con exito.(Esta accion es irreversible)";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar la cita, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		
	}
?>