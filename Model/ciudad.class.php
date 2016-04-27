<?php
	# ->Class: ciudad
	# ->Method(s): Create(), ReadAll(), Update(), Delete()
	#Author: Londoño Ochoa
	
	class ciudad{
		function create($Id_Ciudad,$Id_Departamento,$Nombre)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="INSERT INTO ciudad(Id_Ciudad,Id_Departamento,Nombre) values (?,?,?)";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Ciudad,$Id_Departamento,$Nombre));

			fusion_look_DB::Disconnect();
		}
		function ReadAll()
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM ciudad ORDER BY Nombre";
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
		function Update($Id_Departamento,$Nombre)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="UPDATE ciudad SET Id_Departamento=?,Nombre=?  WHERE Id_Ciudad=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Departamento,$Nombre));

			fusion_look_DB::Disconnect();
		}
		function Delete($Id_Ciudad)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="DELETE FROM ciudad WHERE Id_Ciudad=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Ciudad));

			fusion_look_DB::Disconnect();
		}
	}
?>