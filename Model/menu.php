<?php
if($_SESSION["Tipo_usuario"]=="Usuario"){
?>

<ul>
  <li><a href="pruebainicio.php">Inicio</a></li>
  <li><a href="#">Centros de servicio</a></li>
  <li><a href="cita.php">Mis citas</a></li>
  <li><a href="#">Mi perfil</a></li>
</ul>


<?php
}elseif($_SESSION["Tipo_usuario"]=="Administrador"){
?>
<ul>
  <li><a href="pruebainicio.php">Inicio</a></li>
  <li><a href="#">Citas</a></li>
  <li><a href="empleado.php">Empleados</a></li>
  <li><a href="centro_servicio.php">Centros de servicio</a></li>
</ul>


<?php
}elseif($_SESSION["Tipo_usuario"]=="Desarrollador"){
?>
<ul>
  <li><a href="pruebainicio.php">Inicio</a></li>
  <li><a href="administrador.php">Administradores</a></li>
  <li><a href="ciudad.php">Ciudades</a></li>
  <li><a href="departamento.php">Departamentos</a></li>
</ul>
<?php
}
?>