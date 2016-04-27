<?php
	# ->Class: cita
	# ->Method(s): Create(), ReadAll(), Update(), Delete()
	#Author: Londoño Ochoa
	
	class cita{
		function create($Id_Cita,$Id_usuario,$Id_Promocion,$Id_Empleado,$Fecha_Cita)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="INSERT INTO cita(Id_Cita,Id_Usuario,Id_Promocion,Id_Empleado,Fecha_Cita) values (?,?,?,?,?)";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Cita,$Id_usuario,$Id_Promocion,$Id_Empleado,$Fecha_Cita));

			fusion_look_DB::Disconnect();
		}
		function ReadAll()
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM cita ORDER BY Fecha_Cita";
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
		function Update($Id_Empleado,$Fecha_Cita)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="UPDATE cita SET Id_Empleado=?,Fecha_Cita=? WHERE Id_Cita=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Empleado,$Fecha_Cita));

			fusion_look_DB::Disconnect();
		}
		function Delete($Id_Cita)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="DELETE FROM Cita WHERE Id_Cita=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Cita));

			fusion_look_DB::Disconnect();
		}
	}
?>