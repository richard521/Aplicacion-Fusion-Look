<?php
	# -> Controller: centro_servicio
	#Author: Londoño Ochoa
	session_start();
	//hacemos conexion a la base de datos(fusion_look)
	require_once("../Model/dbconn.php");
	//traemos las clases necesarias
	require_once("../Model/centro_servicio.class.php");
	//instanciamos las variables globales y una llamada "$accion"
	//"la variable accion nos indicara que parte del CRUD estamos creando"

	$accion=$_REQUEST["acc"];
	switch ($accion) {
		case 'C':
			# Create
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Centro 				=$_POST["Id_Centro"];
			$Id_Ciudad				=$_POST["Id_Ciudad"];
			$Nombre					=$_POST["Nombre"];
			$Direccion				=$_POST["Direccion"];
			$Email					=$_POST["Email"];
			$Telefono				=$_POST["Telefono"];
			$Estado					=$_POST["Estado"];
			
			try {
				centro_servicio::Create($Id_Centro,$Id_Ciudad,$Nombre,$Direccion,$Email,$Telefono,$Estado);
				$mensaje="Centro de servicio registrado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'U':
			# Update
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Ciudad				=$_POST["Id_Ciudad"];
			$Nombre					=$_POST["Nombre"];
			$Direccion				=$_POST["Direccion"];
			$Email					=$_POST["Email"];
			$Telefono				=$_POST["Telefono"];
			$Estado					=$_POST["Estado"];
			try {
				centro_servicio::Update($Id_Ciudad,$Nombre,$Direccion,$Email,$Telefono,$Estado);
				$mensaje="Centro de servicio actualizado con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar el usuario, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'D':
			# Delete
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			try {
				$centro = centro_servicio::Delete($_REQUEST["ui"]);
				$mensaje="Centro de servicio eliminado con exito.(Esta accion es irreversible)";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar el usuario, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
	}
	//header("Location: ../Views/centro_servicio.php?msn=$mensaje");
?>