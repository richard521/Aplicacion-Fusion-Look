<?php
	# ->Class: empleado
	# ->Method(s): Create(), ReadAll(),ReadbyId(), Readbyname(), Update(), Delete()
	#Author: Londoño Ochoa

	class usuario{
		/*
			metodo crear
			Este metodo guardara en la tabla usuarios todos los parametros desde el formulario.
		*/
			
		function Create($Id_Empleado,$Id_Usuario,$Id_Centro,$Id_Servicio,$Cargo,$Disponibilidad)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="INSERT INTO empleado(Id_Empleado,Id_Usuario,Id_Centro,Id_Servicio,Cargo,Disponibilidad) values (?,?,?,?,?,?)";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Empleado,$Id_Usuario,$Id_Centro,$Id_Servicio,$Cargo,$Disponibilidad));

			fusion_look_DB::Disconnect();
		}
		function ReadAll()
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM empleado ORDER BY Id_Empleado";
			$query=$conexion->prepare($consulta);
			$query->execute();
			/* devolver el resultado en un array
				Fetch: es el resultado que arroja la consulta en forma de vector o matriz
				segun sea el caso, para consultas donde arroja mas de un dato. el Fetch debe ir acompañado con la palabra ALL.
			*/
			$resultado=$query->fetchALL(PDO::FETCH_BOTH);
			return $resultado;

			fusion_look_DB::Disconnect();	
		}
		function ReadbyId($Id_Empleado)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM empleado WHERE Id_Empleado=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Empleado));
			/* devolver el resultado en un array
				Fetch: es el resultado que arroja la consulta en forma de vector o matriz
				segun sea el caso, para consultas donde arroja mas de un dato. el Fetch debe ir acompañado con la palabra ALL.
			*/
			$resultado=$query->fetch(PDO::FETCH_BOTH);
			return $resultado;

			fusion_look_DB::Disconnect();
		}
		function Readbyname($Nombre)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT Nombre FROM usuario INNER JOIN empleado ON usuario.Id_Usuario=empleado.Id_Usuario";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Nombre));
			/* devolver el resultado en un array
				Fetch: es el resultado que arroja la consulta en forma de vector o matriz
				segun sea el caso, para consultas donde arroja mas de un dato. el Fetch debe ir acompañado con la palabra ALL.
			*/
			$resultado=$query->fetch(PDO::FETCH_BOTH);
			return $resultado;

			fusion_look_DB::Disconnect();
		}
		function Update($Id_Centro,$Id_Servicio,$Cargo,$Disponibilidad)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="UPDATE empleado SET Id_Centro=?,Id_Servicio=?,Cargo=?,Disponibilidad=? WHERE Id_Empleado=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Centro,$Id_Servicio,$Cargo,$Disponibilidad));

			fusion_look_DB::Disconnect();
		}
		function Delete($Id_Empleado)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="DELETE FROM empleado WHERE Id_Empleado=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Empleado));

			fusion_look_DB::Disconnect();
		}
	}
?>