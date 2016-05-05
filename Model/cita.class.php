<?php
	# ->Class: cita
	# ->Method(s): Create(), ReadAll(), Update(), Delete()
	#Author: Londoño Ochoa
	
	class cita{
		function create($Id_usuario,$Id_empleado,$Fecha_cita)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="INSERT INTO cita(Id_usuario,Id_empleado,Fecha_cita) values (?,?,?)";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_usuario,$Id_empleado,$Fecha_cita));

			fusion_look_DB::Disconnect();
		}
		function ReadAll()
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM cita ORDER BY Fecha_cita";
			$query=$conexion->prepare($consulta);
			$query->execute();
			/* 
				devolver el resultado en un array
				Fetch: es el resultado que arroja la consulta en forma de vector o matriz
				segun sea el caso, para consultas donde arroja mas de un dato. el Fetch debe ir acompañado con la palabra ALL.
			*/
			$resultado=$query->fetchALL(PDO::FETCH_BOTH);
			return $resultado;

			fusion_look_DB::Disconnect();
		}
		function Update($Id_empleado,$Fecha_cita)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="UPDATE cita_usuario SET Fecha_cita=?,Estado_cita=? WHERE Id_cita=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Fecha_cita,$Estado_cita));

			fusion_look_DB::Disconnect();
		}
		function Delete($Id_cita)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="DELETE FROM cita WHERE Id_cita=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_cita));

			fusion_look_DB::Disconnect();
		}
	}
?>