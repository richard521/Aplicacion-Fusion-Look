<?php
	# -> Controller: usuario
	#Author: Londoño Ochoa
	session_start();
	//hacemos conexion a la base de datos(fusion_look)
	require_once("../Model/dbconn.php");
	//traemos las clases necesarias
	require_once("../Model/promocion.class.php");
	//instanciamos las variables globales y una llamada "$accion"
	//"la variable accion nos indicara que parte del CRUD estamos creando"

	$accion=$_REQUEST["acc"];
	switch ($accion) {
		case 'C':
			# Create
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Promocion				=$_POST["Id_Promocion"];
			$Id_Centro					=$_POST["Id_Centro"];
			$Descripcion				=$_POST["Descripcion"];
			$Fecha_Inicio				=$_POST["Fecha_Inicio"];
			$Fecha_Fin					=$_POST["Fecha_Fin"];
			
			try {
				promocion::Create($Id_Promocion,$Id_Centro,$Descripcion,$Fecha_Inicio,$Fecha_Fin);
				$mensaje="Promocion creada con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			header("Location: ../Views/promocion.php?msn=$mensaje");
			break;
		case 'U':
			# Update
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Centro					=$_POST["Id_Centro"];
			$Descripcion				=$_POST["Descripcion"];
			$Fecha_Inicio				=$_POST["Fecha_Inicio"];
			$Fecha_Fin					=$_POST["Fecha_Fin"];

			try {
				promocion::Update($Id_Centro,$Descripcion,$Fecha_Inicio,$Fecha_Fin);
				$mensaje="Promocion actualizada con exito.";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar la promocion, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		case 'D':
			# Delete
			# inicializar las variables que enviara el formulario y las que se guardaran en la tabla
			try {
				$promo = promocion::Delete($_REQUEST["ui"]);
				$mensaje="promocion eliminada con exito.(Esta accion es irreversible)";
			} catch (Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar la promocion, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();	
			}
			break;
		
	}
?>