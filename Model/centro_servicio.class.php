<?php
	# ->Class: centro_servicio
	# ->Method(s): Create(), ReaadAll(),ReadbyId(), Readbyname(), Update(), Delete()
	#Author: Londoño Ochoa

	class centro_servicio{
			//Utilizamos "now" para llamar la fecha del sistema (solo en caso de ser necesaria)
		function Create($Id_Centro,$Id_Ciudad,$Nombre,$Direccion,$Email,$Telefono,$Estado)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="INSERT INTO centro_servicio(Id_Centro,Id_Ciudad,Nombre,Direccion,Email,Telefono,Estado) values (?,?,?,?,?,?,?)";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Centro,$Id_Ciudad,$Nombre,$Direccion,$Email,$Telefono,$Estado));

			fusion_look_DB::Disconnect();
		}
		function ReadAll()
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM centro_servicio ORDER BY Nombre";
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
		function ReadbyId($Id_Centro)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM centro_servicio WHERE Id_Centro=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Centro));
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
			$consulta="SELECT * FROM centro_servicio WHERE Nombre=?";
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
		function Update($Id_Ciudad,$Nombre,$Direccion,$Email,$Telefono,$Estado)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="UPDATE centro_servicio SET Id_Ciudad=?,Nombre=?,Direccion=?,Email=?,Telefono=?,Estado=? WHERE Id_Centro=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Ciudad,$Nombre,$Direccion,$Email,$Telefono,$Estado));

			fusion_look_DB::Disconnect();
		}
		function Delete($Id_Centro)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::conect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="DELETE FROM centro_Servicio WHERE Id_Centro=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Centro));

			fusion_look_DB::Disconnect();
		}
		
	}
?>