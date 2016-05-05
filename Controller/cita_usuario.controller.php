<?php
	# -> Controller: cita
	#Author: Londoño Ochoa
	session_start();
	//hacemos conexion a la base de datos(fusion_look)
	require_once("../Model/dbconn.php");
	//traemos las clases necesarias
	require_once("../Model/cita_usuario.class.php");
	//instanciamos las variables globales y una llamada "$accion"
	//"la variable accion nos indicara que parte del CRUD estamos creando"

	$accion=$_REQUEST["acc"];
	switch ($accion) {
		case 'C':
			# Create
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_usuario			=$_POST["Id_usuario"];
			$Id_empleado		=$_POST["Id_empleado"];
			$Fecha_cita			=$_POST["Fecha_cita"];
			
			try {
				cita_usuario::Create($Id_usuario,$Id_empleado,$Fecha_cita);
				$mensaje="Cita agendada con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			header("Location: ../Views/cita_usuario.php?msn=$mensaje");
			break;
		case 'U':
			# Update
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_empleado		=$_POST["Id_empleado"];
			$Fecha_cita			=$_POST["Fecha_cita"];
			try {
				cita_usuario::Update($Id_empleado,$Fecha_cita);
				$mensaje="Cita actualizada con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar la cita, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'D':
			# Delete
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_cita			=$_POST["Id_cita"];

			try {
				cita_usuario::Delete($Id_cita,$Id_usuario,$Id_empleado,$Fecha_cita);
				$mensaje="Cita eliminada con exito.(Esta accion es irreversible)";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar la cita, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		
	}
?>