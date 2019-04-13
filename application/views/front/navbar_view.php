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
    <li class="nav-item active">
        <a class="nav-link" href="#">Productos<span class="sr-only">(current)</span></a>
    </li>

     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #323232;">
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
    <li class="nav-item active">
        <a class="nav-link" href="#">Pataformas<span class="sr-only">(current)</span></a>
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

<button type="button" class="btn btn-outline-light mr-2">
    <i class="fas fa-shopping-bag"></i>
    <span class="badge badge-light">6</span>
    <span class="sr-only">unread messages</span>

</button>
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar"></input>
    <button class="btn btn-outline-light my-2 my-sm-0"  type="submit">
      <i class="fas fa-search"></i>
    </button>
</form>
</div>
</nav>
