<?php
	# ->Class: usuario
	# ->Method(s): Create(), ReadAll(),ReadbyId(), Readbyname(), Update(), Delete(), Login()
	#Author: Londoño Ochoa

	class usuario{
		/*
			metodo crear
			Este metodo guardara en la tabla usuarios todos los parametros desde el formulario.
		*/
			//Utilizamos "now" para llamar la fecha del sistema (solo en caso de ser necesaria)
		function Create($Id_Usuario,$Nombre,$Apellido,$Clave,$Email,$Telefono,$Sexo,$Estado)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="INSERT INTO usuario(Id_Usuario,Nombre,Apellido,Clave,Email,Telefono,Sexo,Estado) values (?,?,?,?,?,?,?,?)";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Usuario,$Nombre,$Apellido,$Clave,$Email,$Telefono,$Sexo,$Estado));

			fusion_look_DB::Disconnect();
		}
		function ReadAll()
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::Connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM usuario ORDER BY Nombre";
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
		function ReadbyId($Id_Usuario)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM usuario WHERE Id_Usuario=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Usuario));
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
			$consulta="SELECT * FROM usuario WHERE Nombre=?";
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
		function Update($Nombre,$Apellido,$Clave,$Email,$Telefono,$Sexo,$Estado)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="UPDATE usuario SET Nombre=?,Apellido=?,Clave=?,Email=?,Telefono=?,Sexo=?,Estado=? WHERE Email=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Nombre,$Apellido,$Clave,$Email,$Telefono,$Sexo,$Estado));

			fusion_look_DB::Disconnect();
		}
		function Delete($Id_Usuario)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="DELETE FROM usuario WHERE Id_Usuario=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Id_Usuario));

			fusion_look_DB::Disconnect();
		}
		function Login($Email,$Clave)
		{
			//Instanciamos y hacemos conexion a la base de datos(fusion_look)
			$conexion=fusion_look_DB::connect();
			$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Crear el query que se llevara a cabo
			$consulta="SELECT * FROM usuario WHERE Email=? AND Clave=?";
			$query=$conexion->prepare($consulta);
			$query->execute(array($Email,$Clave));

			/* devolver el resultado en un array
				Fetch: es el resultado que arroja la consulta en forma de vector o matriz
				segun sea el caso, para consultas donde arroja mas de un dato. el Fetch debe ir acompañado con la palabra ALL.
			*/
			$resultado=$query->fetch(PDO::FETCH_BOTH);
			fusion_look_DB::Disconnect();

			return $resultado;
		}
	}
?>