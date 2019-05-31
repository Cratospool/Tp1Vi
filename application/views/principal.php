<body id=body-Principal>
    <main id="main">
        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/carousel-1.jpg" class="d-block w-100" alt="img1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carousel-2.jpg" class="d-block w-100" alt="img2">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carousel-3.jpg" class="d-block w-100" alt="img3">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carousel-4.jpg" class="d-block w-100" alt="img4">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /carousel -->
        <!-- _____________________________________________________________________________________________________________ -->

        <?php if (!$productos) { ?>

        	<div class="container">
        		<div class="well">
        			<h1>No hay Juegos</h1>
        		</div>
        	</div>

        <?php } else { ?>

        <div class="container">

        	<hr>

        	<div class="row">
        		<?php foreach($productos->result() as $row){ ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-4 mb-4">
                        <div class="card col-fluid">
                            <img src="<?php echo base_url($row->imagen); ?>" alt="" class="card-img-top img-responsive img-thumbnail">
                            <div class="card-body">
                                <p>
        							<?php
        								if ($row->stock < $row->stock_minimo && $row->stock > 0) {
        									echo 'Por debajo del valor minimo: '.$row->stock_minimo;
        								} elseif ($row->stock == 0) {
        									echo 'No hay unidades disponibles';
        								}else {
        									echo 'Disponible:'.$row->stock.' unidades';
        								}
        							?>
        						</p>

        						<p>Precio: $ <?php echo $row->precio_venta; ?> </p>

                                <p>
                                    <p>
                						<?php
                                        if($row->stock <= 0){
                                            echo "<a href='#' class='btn btn-secondary'>Mas Datos</a>";
    											$btn = array(
    												'class' => 'btn btn-danger',
    												'value' => 'Comprar',
    												'disabled' => '',
    												'name' => 'action'
    												);
    											echo form_submit($btn);
    											echo form_close();

    									?>
    									<?php
    										} else if ($session_data = $this->session->userdata('logged_in')){
    											// Envia los datos en forma de formulario para agregar al carrito
                                                echo form_open('carrito_agrega');
                                                echo form_hidden('id', $row->id);
                                                echo form_hidden('descripcion', $row->descripcion);
                                                echo form_hidden('precio_venta', $row->precio_venta);
                                                echo form_hidden('stock', $row->stock);


                                                $btn = array(
        												'class' => 'btn btn-primary',
        												'value' => 'Comprar',
        												'name' => 'action'
        												);
        											echo form_submit($btn);
        											echo form_close();

                                                    echo "<a href='#' class='btn btn-secondary'>Mas Datos</a>";
    									?>

                                        <br>
    									<?php
    									} else {
                                            echo "<a href='#' class='btn btn-secondary'>Mas Datos</a>";
    											$btn = array(
    												'class' => 'btn btn-primary',
    												'value' => 'Comprar',
    												'data-target' => '#modalLogin',
    												'data-toggle' => 'modal',
    												'name' => 'action'
    												);

    											echo form_submit($btn);
    											echo form_close();

    										}
                						?>

            						</p>

                                    <div class="collapse" id="a<?php echo $row->id ?>">
                                        <div class="card card-body">
                                            <h3>---US$ 30---</h3> <br>
                                            Requisitos Mínimos:
                                            Sistema Operativo: Windows 7, Windows 8, Windows 10
                                            Procesador: Intel o AMD Dual Core CPU
                                            Memoria: 4 Gigas de RAM
                                            Gráficos: DirectX 10 Feature Level AMD o NVIDIA con 1 Giga VRAM
                                            DirectX: Versión 11
                                            Almacenamiento: 36 Gigas de espacio disponible
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
        		<?php } ?>
        	</div>

        </div>
        <?php } ?>
    </main>
