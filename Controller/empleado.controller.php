<?php
	# -> Controller: usuario
	#Author: Londoño Ochoa
	session_start();
	//hacemos conexion a la base de datos(fusion_look)
	require_once("../Model/dbconn.php");
	//traemos las clases necesarias
	require_once("../Model/empleado.class.php");
	//instanciamos las variables globales y una llamada "$accion"
	//"la variable accion nos indicara que parte del CRUD estamos creando"

	$accion=$_REQUEST["acc"];
	switch ($accion) {

		case 'C':
			# Create
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			
			try {
				empleado::Create($Id_Empleado,$Id_Usuario,$Id_Centro,$Cargo,$Disponibilidad);
				$mensaje="Empleado creado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			header("Location: ../Views/inicio.php?msn=$mensaje");
			break;


		case 'U':
			# Update
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			
			try {
				empleado::Update($Id_Centro,$Cargo,$Disponibilidad);
				$mensaje="Empleado actualizado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar el empleado, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;

		case 'D':
			# Delete			
			try {
				$emple = empleado::Delete($_REQUEST["ui"]);
				$mensaje="Empleado eliminado con exito.(Esta accion es irreversible)";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar el empleado, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
	}
?>