<body id=body-Principal>
    <main id="main">
<section class="content">
		<div class="container">
			<div class="col-sm-10 col-md-10">
				<div class="well">
					<h1><?php echo $usuario; ?></h1>
				</div>

				<?php echo form_open_multipart("verifico_modifica_perfil/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Nombre:', 'nombre'); ?>
								<?php echo form_input(['name' => 'nombre',
																'id' => 'nombre',
																'class' => 'form-control',
																'placeholder' => 'Nombre',
																'autofocus'=>'autofocus',
																'value'=>"$nombre"]); ?>
								<?php echo form_error('nombre'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Apellido:', 'apellido'); ?>
								<?php echo form_input(['name' => 'apellido',
																'id' => 'apellido',
																'class' => 'form-control',
																'placeholder' => 'Apellido',
																'value'=>"$apellido"]); ?>
								<?php echo form_error('apellido'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Email:', 'email'); ?>
								<?php echo form_input(['name' => 'email',
																'id' => 'email',
																'class' => 'form-control',
																'placeholder' => 'Email',
																'value'=>"$email"]); ?>
								<?php echo form_error('email'); ?>
							</div>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Nuevo Password:', 'nuevo_password'); ?>
								<?php echo form_password(['name' => 'password',
																'id' => 'password',
																'class' => 'form-control',
																'placeholder' => 'Ingrese nuevo password',
																'value'=>"$password"]); ?>
								<?php echo form_error('password'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Confirmar nuevo password:', 'confirmar_nuevo_password'); ?>
								<div class="col-lg-10">
							<?php echo form_password(['name' => 're_password',
													'id' => 're_password',
													'class' => 'form-control',
													'placeholder' => 'Repetir Contraseña',
													'value'=>"$password"]); ?>
						</div>
								<?php echo form_error('re_password'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Imagen actual:', 'img_ac'); ?>
								<img  id="imagen_view" name="imagen_view" class="img-thumbnail" src="<?php  echo base_url($imagen); ?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Imagen:', 'imagen'); ?>
								<?php echo form_input(['type' => 'file',
																'name' => 'filename',
																'id' => 'filename',
																'class' => 'form-control']); ?>
								<?php echo form_error('filename'); ?>
								<br>

							</div>
						</div>
					</div>

                    <div class="col">

								<br>
								<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-success btn-block mb-3'"); ?>


					</div>
				<?php echo form_close(); ?>


    </section>
    <!-- /.content -->
</main>
</body>
