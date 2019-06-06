<body id=body-Principal>
    <main id="main">
<section class="cid-qWojGWOW0Y mbr-parallax-background mbr-fullscreen "  id="header15-14">


<!---->


    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Iniciar sesion</h1>
        <img class="mb-5" width="400px" height="400px" src="<?php echo base_url('assets/img/login.png'); ?>" alt="">

    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            <div data-form-alert="" hidden="" class="align-center">Thanks for filling out the form!</div>

           <div class="media-container-column" data-form-type="formoid">
            <div data-form-alert="" hidden="" class="align-center">Thanks for filling out the form!</div>
             <?php echo validation_errors(); ?>

            <?php echo form_open('verifico_usuario', ['class' => 'form-signin', 'role' => 'form']); ?> <br>

				<?php echo form_input(['name' => 'usuario',
										'id' => 'usuario',
										'class' => 'form-control',
										'placeholder' => 'Usuario',
										'required'=>'required',
										'autofocus'=>'autofocus']); ?>
            <br>

				<?php echo form_input(['type' => 'password',
										'name' => 'password',
										'id' => 'password',
										'class' => 'form-control',
										'placeholder' => 'Contraseña',
										'required'=>'required']); ?> <br>

				<?php echo form_submit('submit', 'Iniciar sesión',"class='btn btn-form btn-success display-4'"); ?> <br><br>
                <button class=" btn btn-success my-2 my-sm-0" type="submit">
                  <a href="<?php echo base_url('registro');?>">Registrarse</a>
                </button>

				<?php echo form_close(); ?>
				<br>
        </div>
        </div>
    </div>
    </div>
</div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>
</main>
