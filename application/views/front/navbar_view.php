<!-- Header -->

<?php $session_data = $this->session->userdata('logged_in'); ?>

<!-- <script> -->
<script language="JavaScript" src="assets/js/jquery-3.3.1.min.js"></script>
<!--<script language="JavaScript" src="jquery.watermarkinput.js"></script> -->

<script type="text/javascript">
    $(document).ready(function(){

    $(".busca").keyup(function(){ //se crea la funcioin keyup
    var texto = $(this).val();//se recupera el valor de la caja de texto y se guarda en la variable texto
    var dataString = 'palabra='+ texto;//se guarda en una variable nueva para posteriormente pasarla a busqueda.php

    if(texto==''){//si no tiene ningun valor la caja de texto no realiza ninguna accion
        //ninguna acción
    }else{
    //pero si tiene valor entonces
    $.ajax({//metodo ajax
    type: "POST",//aqui puede  ser get o post
    url: "busqueda.php",//la url adonde se va a mandar la cadena a buscar
    data: dataString,
    cache: false,
    success: function(html){//funcion que se activa al recibir un dato
    $("#display").html(html).show();// funcion jquery que muestra el div con identificador display, como formato html, tambien puede ser .text
    }
    });

    }
    return false;
    });
    });
</script>
<!-- </script> -->

<header id="header">
    <div id="navbar-superior" class="container">
        <div class="row">
            <div class="col-3"></div>
            <div  class="col-md-6">
                <a href="<?php echo base_url('principal');?>">
                    <img id="logo" src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-responsive center-block" alt="Logo">
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
            <a href="<?php echo base_url('principal');?>"><img  src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-responsive" alt="Logo" style="height: 55px;"></a>
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


            <li><a href="<?php echo base_url("productosCAT/1"); ?>">
                    <img id="icono-pc" src="<?php echo base_url('assets/img/pc.png'); ?>" class="img-responsive" alt="Logo" style="height: 50px;">
                </a>
            </li>
            <li>
                <a id="icono-ps"href="<?php echo base_url("productosCAT/2"); ?>">
                    <img  src="<?php echo base_url('assets/img/ps.png'); ?>" class="img-responsive" alt="Logo" style="height: 55px;">
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("productosCAT/3"); ?>">
                    <img id="icono-xbox" src="<?php echo base_url('assets/img/xbox.png'); ?>" class="img-responsive" alt="Logo" style="height: 50px;">
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
                      <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">
                        Ver juegos eliminados</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraproductos');?>">
                      Ver todos los Juegos</a>

                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                  </a>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('agregausuario');?>">
                      Agregar Usuario</a>
                    <a class="dropdown-item" href="<?php echo base_url('usuarios_todos');?>">
                      Ver todos los Usuarios</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestrausuarioseliminados');?>">
                      Ver Usuarios eliminados</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reportes
                  </a>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('muestraventas');?>">
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
                <a class="nav-link" href="<?php echo base_url('carrito');?>"><i class="fa fa-shopping-cart"></i> Carro</a>">

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
            <?php
        }?>


        <form class="form-inline my-2 my-md-0">
          <input type="search" class=" busca" id="caja_busqueda" name="clave" placeholder="¿Qué estás buscando?" aria-label="Search" style="position: relative;">
         <div class="" id="display" style="position: initial;"></div>
        </form>
    </div>
</nav>
