
<div class="container">
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Modificar Datos</h1>
		<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
		<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>
	</div>

	<?php echo form_open_multipart("verifico_modificausuario/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Nombre:', 'nombre'); ?>
					<?php echo form_input(['name' => 'nombre',
													'id' => 'nombre',
													'class' => 'form-control',
													'placeholder' => 'Descripcion',
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
													'placeholder' => '1- Electrodomesticos - 2-Muebles',
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
													'placeholder' => 'Precio Costo',
													'value'=>"$email"]); ?>
					<?php echo form_error('email'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Usuario:', 'usuario'); ?>
					<?php echo form_input(['name' => 'usuario',
													'id' => 'usuario',
													'class' => 'form-control',
													'placeholder' => 'Precio Venta',
													'value'=>"$usuario"]); ?>
					<?php echo form_error('usuario'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Password:', 'password'); ?>
					<?php echo form_input(['name' => 'password',
													'id' => 'password',
													'class' => 'form-control',
													'placeholder' => 'Stock',
													'value'=>"$password"]); ?>
					<?php echo form_error('password'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Perdil:', 'perfil_id'); ?>
					<?php echo form_input(['name' => 'perfil_id',
													'id' => 'perfil_id',
													'class' => 'form-control',
													'placeholder' => 'Stock Minimo',
													'value'=>"$perfil_id"]); ?>
					<?php echo form_error('perfil_id'); ?>
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
					<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
	<div>

	</div>
</div>
</div>
</div>
