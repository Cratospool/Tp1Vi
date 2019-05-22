<!-- Header -->

<?php $session_data = $this->session->userdata('logged_in'); ?>

<header id="header">
    <div id="navbar-superior" class="container">
        <div class="row">
            <div class="col-3"></div>
            <div  class="col-md-6">
                <a href="<?php echo base_url('principal');?>">
                    <img id="logo" src="assets/img/logo.png" class="img-responsive center-block" alt="Logo">
                </a>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    </div>
</header>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top" >
    <a class="navbar-brand ">
        <span class="navbar-logo">
            <a href="<?php echo base_url('principal');?>"><img  src="assets/img/logo.png" class="img-responsive" alt="Logo" style="height: 55px;"></a>
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Generos
                </a>
                <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown" >
                    <a class="dropdown-item" href="#"><i class="fas fa-dragon"></i>  Acción</a>
                    <a class="dropdown-item" href="#"><i class="fab fa-fort-awesome"></i>  Aventura</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-car-crash"></i>  Conducción</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-futbol"></i>  Deportes</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-chess"></i>  Estrategia</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-fist-raised"></i>  Lucha</a>
                    <a class="dropdown-item" href="#"><i class="fab fa-earlybirds"></i>  Simulacion</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-street-view"></i>  Rol</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-spider"></i>  Terror</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fab fa-battle-net"></i>  Todos</a>
                </div>
            </li>

            <li><a href="<?php echo base_url('principal');?>">
                    <img id="icono-pc" src="assets/img/pc.png" class="img-responsive" alt="Logo" style="height: 50px;">
                </a>
            </li>
            <li>
                <a id="icono-ps" href="<?php echo base_url('principal');?>">
                    <img  src="assets/img/ps.png" class="img-responsive" alt="Logo" style="height: 55px;">
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('principal');?>">
                    <img id="icono-xbox" src="assets/img/xbox.png" class="img-responsive" alt="Logo" style="height: 50px;">
                </a>
            </li>
        </ul>
        <!-- MENU PARA ADMINISTRADOR -->
        <?php if(($this->session->userdata('logged_in')) and ($session_data['perfil_id'] == '1'))
        {
            ?>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Juegos
                  </a>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('agregaproducto');?>">
                      Agregar juego</a>
                    <a class="dropdown-item" href="<?php echo base_url('modificaproducto');?>">
                      Modificar juego</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraelectrodomesticos');?>">
                      Ver todos los Juegos</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">
                      Ver juegos eliminados</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                  </a>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('agregaproducto');?>">
                      Agregar Socio</a>
                    <a class="dropdown-item" href="<?php echo base_url('modificaproducto');?>">
                      Modificar Socio</a>
                    <a class="dropdown-item" href="<?php echo base_url('usuarios_todos');?>">
                      Ver todos los Socios</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">
                      Ver socios eliminados</a>
                  </div>
                </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reportes
              </a>
              <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('ventas');?>">
                  Ventas</a>
                <a class="dropdown-item" href="<?php echo base_url('consultas');?>">
                  Consultas</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
              </a>
              <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
              </div>
            </li>
          </ul>
            <?php
            // MENU PARA CLIENTE
        } else if (($this->session->userdata('logged_in')) and ($session_data['perfil_id'] == '2'))
        {
            ?>
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa fa-shopping-cart"></i> Mi Carrito
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
                </a>
                <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url('comprar');?>">Mis Compras</a>
                  <a class="dropdown-item" href="<?php echo base_url('misdatos');?>">Mis datos</a>
                  <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Search">
              <button class="btn btn-dark my-2 my-sm-0" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
            <?php
            // MENU PARA PUBLICO EN GENERAL
        }else
        {
            ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mr-2" data-toggle="modal" data-target="#modalLogin">
                  <a href="<?php echo base_url('login');?>">Login</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Search">
              <button class="btn btn-dark my-2 my-sm-0" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
            <?php
        }?>
    </div>
</nav>
