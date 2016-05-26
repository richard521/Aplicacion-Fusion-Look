<?php
if($_SESSION["Tipo_usuario"]=="Usuario"){
?>
    <div class="nav-wrapper grey darken-1">
        <style type="text/css">
        .brand-logo {font-family: 'Poiret One'}
      </style>
        <ul id="centros" class="dropdown-content">
            <li><a href="gestioncentros.php">Consultar</a></li>
        </ul>
        <ul id="cita" class="dropdown-content">
            <li><a href="cita.php">Agendar cita</a></li>
            <li><a href="gestioncita.php">Mis citas</a></li>
        </ul>
            <a href="#" class="brand-logo">Fusion-Look</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Inicio</a></li>
              <li><a href="#" class="dropdown-button" data-activates="centros">Centros de servicio</a></li>
              <li><a href="#" class="dropdown-button" data-activates="cita">Mis Citas</a></li>
              <li><a href="#">Mi perfil</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
            <!--<ul class="side-nav" id="mobile-demo">
              <li><a href="#">Inicio</a></li>
              <li><a href="gestioncentros.php">Centros de servicio</a></li>
              <li><a href="gestioncita.php">Mis citas</a></li>
              li><a href="#">Mi perfil</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>-->
    </div>
<?php
}elseif($_SESSION["Tipo_usuario"]=="Administrador"){
?>
    <div class="nav-wrapper grey darken-1">
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
        <ul id="servicios" class="dropdown-content">
            <li><a href="servicio.php">Crear</a></li>
            <li><a href="gestionservicios.php">Gestionar</a></li>
        </ul>
        <ul id="tiposer" class="dropdown-content">
            <li><a href="tipo_servicio.php">Crear</a></li>
            <li><a href="#">Consultar</a></li>
        </ul>
            <a href="#" class="brand-logo">Fusion-Look</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#" class="dropdown-button" data-activates="centros">Centros de servicio</a></li>
              <li><a href="#" class="dropdown-button" data-activates="empleados">Empleados</a></li>
              <li><a href="gestioncita.php">Citas</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
            <!--<ul class="side-nav" id="mobile-demo">
              <li><a href="#" class="dropdown-button" data-activates="centros">Centros de servicio</a></li>
              <li><a href="#" class="dropdown-button" data-activates="empleados">Empleados</a></li>
              <li><a href="gestioncita.php">Citas</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>-->
    </div>


<?php
}elseif($_SESSION["Tipo_usuario"]=="Desarrollador"){
?>
    <div class="nav-wrapper grey darken-1">
        <style type="text/css">
        .brand-logo {font-family: 'Poiret One'}
        </style>
        <ul id="desarrollo" class="dropdown-content">
            <li><a href="desarrollo.php">Crear</a></li>
            <li><a href="gestiondesarrollo.php">Consultar</a></li>
        </ul>
        <ul id="admins" class="dropdown-content">
            <li><a href="administrador.php">Crear</a></li>
            <li><a href="#">Gestionar</a></li>
        </ul>
        <ul id="users" class="dropdown-content">
            <li><a href="gestion.php">Gestionar</a></li>
        </ul>
        <ul id="departamentos" class="dropdown-content">
            <li><a href="departamento.php">Crear</a></li>
            <li><a href="gestiondepartamento.php">Gestionar</a></li>
        </ul>
        <ul id="ciudades" class="dropdown-content">
            <li><a href="ciudad.php">Crear</a></li>
            <li><a href="gestionciudad.php">Gestionar</a></li>
        </ul>
        <ul id="tiposer" class="dropdown-content">
            <li><a href="#">Gestionar</a></li>
        </ul>
            <a href="pruebainicio.php" class="brand-logo">Fusion-Look</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#" class="dropdown-button" data-activates="desarrollo">Desarrolladores</a></li>
              <li><a href="#" class="dropdown-button" data-activates="admins">Administradores</a></li>
              <li><a href="#" class="dropdown-button" data-activates="users">Usuarios</a></li>
              <li><a href="#" class="dropdown-button" data-activates="departamentos">Departamentos</a></li>
              <li><a href="#" class="dropdown-button" data-activates="ciudades">Ciudades</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesión</a></li>
            </ul>
            <!--<ul class="side-nav" id="mobile-demo">
              <li><a href="#" class="dropdown-button" data-activates="desarrollo">Desarrolladores</a></li>
              <li><a href="#" class="dropdown-button" data-activates="admins">Administradores</a></li>
              <li><a href="#" class="dropdown-button" data-activates="users">Usuarios</a></li>
              <li><a href="#" class="dropdown-button" data-activates="departamentos">Departamentos</a></li>
              <li><a href="#" class="dropdown-button" data-activates="ciudades">Ciudades</a></li>
              <li><a href="../Model/cerrarsesion.php">Cerrar sesion</a></li>
            </ul>-->
    </div>
<?php
}
?>