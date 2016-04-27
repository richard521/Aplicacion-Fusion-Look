<?php 
	# -> Controller: ciudad
	# -> Author: Londoño Ochoa
	session_start();
	//Hacemos conexion a la base de datos
	require_once("../Model/dbconn.php");
	//Traemos las clases necesarias
	require_once("../Model/ciudad.class.php");
	//instanciamos las variables globales y una llamada"$accion"
	//la variable accion nos indicara que parte del CRUD estamos creando

	$accion=$_REQUEST["acc"];
	switch ($accion) {
		case 'C':
			# Create
			# inicializamos las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Ciudad 				=$_POST["Id_Ciudad"];
			$Id_Departamento 		=$_POST["Id_Departamento"];
			$Nombre 				=$_POST["Nombre"];
			try{
				ciudad::Create($Id_Ciudad,$Id_Departamento,$Nombre);
				$mensaje="Ciudad registrada con exito.";
			}catch(Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de hacer el registro, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();
			}
			break;
		case 'U':
			# Update
			# inicializamos las variables que enviara el formulario y las que se guardaran en la tabla
			$Id_Departamento 		=$_POST["Id_Departamento"];
			$Nombre					=$_POST["Nombre"];
			try{
				ciudad::Update($Id_Departamento,$Nombre);
				$mensaje="Ciudad actualizada con exito.";
			}catch(Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de actualizar la ciudad, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();
			}
			break;
		case 'D':
			# Delete
			# inicializamos las variables que enviara el formulario y las que se guardaran en la tabla
			try{
				$ciu = ciudad::Delete($_REQUEST["ui"]);
				$mensaje="Ciudad eliminada con exito.(Esta accion es irreversible)";
			}catch(Exception $e){
				$mensaje="Lo sentimos, ha ocurrido un error al momento de eliminar la ciudad, ruta error: ".$e->getMessage().", ".$e->getFile().", ".$e->getLine();
			}
			break;
	}
	//header("Location: ../Views/inicio.php?msn=$mensaje");
?>