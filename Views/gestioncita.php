<?php
	session_start();

	if(!isset($_SESSION["Id_usuario"])){
		$mensaje=("Debes iniciar sesion primero");
		$tipo_mensaje=("advertencia");

		header("Location: ../Views/login.php?m=".$mensaje."&t=".$tipo_mensaje);
	}
  require_once("../Model/dbconn.php");
	require_once("../Model/cita.class.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <!--Import Google Icon Font-->
	  <!--<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert-master/dist/sweetalert.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--datatable-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

      <script>
    	$(document).ready( function () {
      	$('#datatable').DataTable();
    	});
    </script>
    </head>
  	<body>
    <h1>Gestion de citas</h1>
    <table id="datatable" class="display">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Usuario</th>
          <th>Empleado</th>
          <th>Fecha</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php

      $cita = cita::ReadAll();
      foreach ($cita as $row) {    
      echo "<tr>
                <td>".$row["Id_cita"]."</td>
                <td>".$row["Id_usuario"]."</td>
                <td>".$row["Id_empleado"]."</td>
                <td>".$row["Fecha_cita"]."</td>
                <td>

                  <a href='editarcita.php?cii=".($row["Id_cita"])."'><i class='small material-icons'>mode_edit</i></a>
                  <a href='../Controller/cita.controller.php?cii=".($row["Id_cita"])."&acc=D'><i class='small material-icons'>delete</i></a>


                </td>
              </tr>";
          }
         ?>
        </tbody>
    </table>
  </body>
</html>