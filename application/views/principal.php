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
                    <img src="<?php echo base_url('assets/img/carousel-1.jpg'); ?>" class="d-block w-100" alt="img1">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/img/carousel-2.jpg'); ?>" class="d-block w-100" alt="img2">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/img/carousel-3.jpg'); ?>" class="d-block w-100" alt="img3">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/img/carousel-4.jpg'); ?>" class="d-block w-100" alt="img4">
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
        						<p>Precio: $ <?php echo $row->precio_venta; ?> </p>
                                <p>
        							<?php
        								if ($row->stock < $row->stock_minimo && $row->stock > 0) {
        									echo 'Quedan solo: '.$row->stock.' unidades';
        								} elseif ($row->stock == 0) {
        									echo 'No hay unidades disponibles';
        								}else {
        									echo 'Disponible: '.$row->stock.' unidades';
        								}
        							?>
        						</p>
                                <a href="<?php echo base_url("verDetalle/$row->id"); ?>" class='btn btn-success'>Ver más</a>

                            </div>
                        </div>
                    </div>
        		<?php } ?>
        	</div>

        </div>
        <?php } ?>
    </main>
