<header>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark nabvar-static-top mb-10">
        <a class="navbar-brand ">
            <span class="navbar-logo">
                <a href="<?php echo base_url('principal');?>">
                    <img id="logo" src="assets/img/logo.png" alt="">
                </a>
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
                        <a class="dropdown-item" href="#">Acción</a>
                        <a class="dropdown-item" href="#">Aventura</a>
                        <a class="dropdown-item" href="#">Conducción</a>
                        <a class="dropdown-item" href="#">Deportes</a>
                        <a class="dropdown-item" href="#">Estrategia</a>
                        <a class="dropdown-item" href="#">Lucha</a>
                        <a class="dropdown-item" href="#">Simulacion</a>
                        <a class="dropdown-item" href="#">Rol</a>
                        <a class="dropdown-item" href="#">Terror</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Todos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carro</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">
                  <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </nav>
</header>
