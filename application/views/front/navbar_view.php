<!-- Header -->

<?php $session_data = $this->session->userdata('logged_in'); ?>
<?php $id_usuario = $session_data['id'] ?>


<!-- <script> -->
<script language="JavaScript" src="assets/js/jquery-3.3.1.min.js"></script>
<!--<script language="JavaScript" src="jquery.watermarkinput.js"></script> -->

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
        <span class="navbar-logo ">
            <a href="<?php echo base_url('principal');?>"><img  src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-responsive" alt="Logo" style="height: 55px;"></a>
        </span>
    </a>


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
                <li>
                <div class="dropdown mt-3">
                    <button class="btn btn-success dropdown-toggle m-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Juegos
                    </button>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('agregaproducto');?>">
                      Agregar juego</a>
                      <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">
                        Ver juegos eliminados</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraproductos');?>">
                      Ver todos los Juegos</a>

                  </div>
                </div>
                </li>
                <li>
                <div class="dropdown mt-3">
                    <button class="btn btn-success dropdown-toggle m-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuarios
                    </button>
                    <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="<?php echo base_url('agregausuario');?>">
                          Agregar Usuario</a>
                         <a class="dropdown-item" href="<?php echo base_url('usuarios_todos');?>">
                          Ver todos los Usuarios</a>
                         <a class="dropdown-item" href="<?php echo base_url('muestrausuarioseliminados');?>">
                          Ver Usuarios eliminados</a>
                    </div>
                </div>
                </li>
                <li>
                <div class="dropdown mt-3">
                    <button class="btn btn-success dropdown-toggle m-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes
                    </button>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('muestraventas');?>">
                      Ventas</a>
                    <a class="dropdown-item" href="<?php echo base_url('consultas');?>">
                      Consultas</a>
                  </div>
                </div>
                </li>
                <li>

                <div class="dropdown mt-3 mr-2">
                    <button class="btn btn-success dropdown-toggle m-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>  <?= $session_data['usuario'] ?>
                    </button>

                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url("mi_perfil/$id_usuario"); ?>">Mi perfil</a>
                    <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
                  </div>
                </div>
                </li>
                <li>
                    <div class="row">
                        <?php echo form_open_multipart("busqueda", ['class' => 'form-signin', 'role' => 'form']); ?>
                        <div class="col-12">
                            <div class="form-group">
                                <?php echo form_label('', 'texto'); ?>
                                <?php echo form_input(['name' => 'busqueda',
                                                                'id' => 'busqueda',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Buscar',
                                                                'autofocus'=>'autofocus',
                                                                'value'=>set_value('busqueda')]); ?>
                                <?php echo form_error('texto'); ?>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        </div>
                    </ul>
                </li>
            <?php
            // MENU PARA CLIENTE
        } else if (($this->session->userdata('logged_in')) and ($session_data['perfil_id'] == '2'))
        {
            ?>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link mt-3" href="<?php echo base_url('carrito');?>"><i class="fa fa-shopping-cart"></i> Carro</a>

                </li>
                <li class="nav-item">
                  <div class="dropdown mt-3">
                  <button class="btn btn-success dropdown-toggle m-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user"></i>  <?= $session_data['usuario'] ?>
                  </button>

                    <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url("mi_perfil/$id_usuario"); ?>">Mi perfil</a>
                      <a class="dropdown-item" href="<?php echo base_url('muestraventasU');?>">
                        Ventas</a>
                      <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
                    </div>
                 </div>
                </li>
            <li class="nav-item">
                <div class="row">

                        <div class="col-12">
                            <?php echo form_open_multipart("busqueda", ['class' => 'form-signin', 'role' => 'form']); ?>
                            <div class="form-group">
                                <?php echo form_label('', 'texto'); ?>
                                <?php echo form_input(['name' => 'busqueda',
                                'id' => 'busqueda',
                                'class' => 'form-control',
                                'placeholder' => 'Buscar',
                                'autofocus'=>'autofocus',
                                'value'=>set_value('busqueda')]); ?>
                                <?php echo form_error('texto'); ?>
                                <?php echo form_close(); ?>
                            </div>

                    </div>
                </div>
            </li>
        </ul>
            <?php
            // MENU PARA PUBLICO EN GENERAL
        }else
        {
            ?>
            <button type="button" class="btn btn-success">
                <a href="<?php echo base_url('login');?>">Iniciar Sesión</a>
            </button>

            <?php
        }?>

</nav>
