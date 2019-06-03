<body id=body-Principal>
    <main id="main">
        <?php if (!$producto) { ?>
        	<div class="container">
        		<div class="well">
        			<h1>Juego no encontrado</h1>
        		</div>
        	</div>

        <?php } else { ?>
            <div id="ver_detalle" class="container">
        		<?php foreach($producto->result() as $row){ ?>

                        <h1><?php echo trim($row->nombre); ?> </h1>

                    <div class="row">
                        <div class="col-md-4 col-10 ml-5">
                            <img width="486" height="227" src="<?php echo base_url($row->imagen); ?>" alt="" class="card-img-top img-responsive img-thumbnail">
                            <div class="row p-3">
                                <div class=" card-body m-1">
                                    <div class="col">
                                        <h3>Precio: $ <?php echo $row->precio_venta; ?></h3>
                                    </div>
                                    <div class="col">
                                        <?php
                                        if($row->stock <= 0){
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
                                            echo form_hidden('nombre', $row->nombre);
                                            echo form_hidden('precio_venta', $row->precio_venta);
                                            echo form_hidden('stock', $row->stock);
                                            ?>
                                            <?php
                                            $btn = array(
                                                'class' => 'btn btn-success',
                                                'value' => 'Comprar',
                                                'name' => 'action'
                                            );
                                            echo form_submit($btn);
                                            echo form_close();
                                            ?>
                                            <?php
                                        } else {
                                            $btn = array(
                                                'class' => 'btn btn-success',
                                                'value' => 'Comprar',
                                                'data-target' => '#modalLogin',
                                                'data-toggle' => 'modal',
                                                'name' => 'action'
                                            );

                                            echo form_submit($btn);
                                            echo form_close();

                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="video_youtuve   ">
                                <iframe width="674" height="378" src="<?php echo trim($row->multimedia); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="row p-4">
                                <h4><?php echo trim($row->descripcion); ?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="card-body mb-3">
                            <h3>Ver formas de pago</h3>
                        </div>

                    </div> -->
            	<?php } ?>
        	</div>
        <?php } ?>
    </main>
