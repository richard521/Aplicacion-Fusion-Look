<?php
	# ->Class: promocion
	# ->Method(s): Create(), ReadAll(), Update(), Delete()
	#Author: Londoño Ochoa
	
	class promocion{
		function create($Id_Promocion,$Id_Centro,$Descripcion,$Fecha_Inicio,$Fecha_Fin)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="INSERT INTO promocion(Id_Promocion,Id_Centro,Descripcion,Fecha_Inicio,Fecha_Fin) values (?,?,?,?,?,)";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Promocion,$Id_Centro,$Descripcion,$Fecha_Inicio,$Fecha_Fin));

			fusion_look_DB::Disconnect();
		}
		function ReadAll()
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM promocion ORDER BY Id_Promocion";
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
		function Update($Id_Centro,$Descripcion,$Fecha_Inicio,$Fecha_Fin)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="UPDATE promocion SET Id_Centro=?,Descripcion=?,Fecha_Inicio=?,Fecha_Fin=? WHERE Id_Promocion=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Centro,$Descripcion,$Fecha_Inicio,$Fecha_Fin));

			fusion_look_DB::Disconnect();
		}
		function Delete($Id_Promocion)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="DELETE FROM promocion WHERE Id_Promocion=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Promocion));

			fusion_look_DB::Disconnect();
		}
	}
?>