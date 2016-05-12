<?php
if($_SESSION["Tipo_usuario"]=="Usuario"){
?>
    <div class="nav-wrapper">
        <style type="text/css">
        .brand-logo {font-family: 'Poiret One'}
      </style>
        <ul id="centros" class="dropdown-content">
            <li><a href="centro_servicio.php">Crear</a></li>
            <li><a href="gestioncentros.php">Gestionar</a></li>
        </ul>
        <ul id="empleados" class="dropdown-content">
            <li><a href="empleado.php">Crear</a></li>
            <li><a href="gestionempleado.php">Gestionar</a></li>
        </ul>
            <a href="#" class="brand-logo">Fusion-Look</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Inicio</a></li>
              <li><a href="gestioncentros.php">Centros de servicio</a></li>
              <li><a href="gestioncita.php">Mis Citas</a></li>
              <li><a href="#">Mi perfil</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#">Inicio</a></li>
              <li><a href="gestioncentros.php">Centros de servicio</a></li>
              <li><a href="gestioncita.php">Mis citas</a></li>
              li><a href="#">Mi perfil</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
    </div>
<?php
}elseif($_SESSION["Tipo_usuario"]=="Administrador"){
?>
    <div class="nav-wrapper">
        <style type="text/css">
        .brand-logo {font-family: 'Poiret One'}
      </style>
        <ul id="centros" class="dropdown-content">
            <li><a href="centro_servicio.php">Crear</a></li>
            <li><a href="gestioncentros.php">Gestionar</a></li>
        </ul>
        <ul id="empleados" class="dropdown-content">
            <li><a href="#">Crear</a></li>
            <li><a href="#">Gestionar</a></li>
        </ul>
            <a href="#" class="brand-logo">Fusion-Look</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#" class="dropdown-button" data-activates="centros">Centros de servicio</a></li>
              <li><a href="#" class="dropdown-button" data-activates="empleados">Empleados</a></li>
              <li><a href="gestioncita.php">Citas</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#" class="dropdown-button" data-activates="centros">Centros de servicio</a></li>
              <li><a href="#" class="dropdown-button" data-activates="empleados">Empleados</a></li>
              <li><a href="gestioncita.php">Citas</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
    </div>


<?php
}elseif($_SESSION["Tipo_usuario"]=="Desarrollador"){
?>
    <div class="nav-wrapper">
        <style type="text/css">
        .brand-logo {font-family: 'Poiret One'}
      </style>
        <ul id="admins" class="dropdown-content">
            <li><a href="administrador.php">Crear</a></li>
            <li><a href="gestionadmin.php">Gestionar</a></li>
        </ul>
        <ul id="ciudades" class="dropdown-content">
            <li><a href="ciudad.php">Crear</a></li>
            <li><a href="gestionciudad.php">Gestionar</a></li>
        </ul>
        <ul id="departamentos" class="dropdown-content">
            <li><a href="departamento.php">Crear</a></li>
            <li><a href="gestiondepartamento.php">Gestionar</a></li>
        </ul>

            <a href="#" class="brand-logo">Fusion-Look</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#" class="dropdown-button" data-activates="admins">Administradores</a></li>
              <li><a href="#" class="dropdown-button" data-activates="admins">Departamentos</a></li>
              <li><a href="#" class="dropdown-button" data-activates="ciudades">Ciudades</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#" class="dropdown-button" data-activates="admins">Administradores</a></li>
              <li><a href="#" class="dropdown-button" data-activates="departamentos">Departamentos</a></li>
              <li><a href="#" class="dropdown-button" data-activates="ciudades">Ciudades</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
    </div>
<?php
}
?>