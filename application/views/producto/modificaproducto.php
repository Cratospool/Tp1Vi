<body id=body-Principal>
    <main id="main">
<div class="container">
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Modificar Datos</h1>
		<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
		<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>
	</div>

	<?php echo form_open_multipart("verifico_modificaproducto/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
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
					<?php echo form_label('Multimedia:', 'multimedia'); ?>
					<?php echo form_input(['name' => 'multimedia',
													'id' => 'multimedia',
													'class' => 'form-control',
													'placeholder' => 'Multimedia',
													'value'=>"$multimedia"]); ?>
					<?php echo form_error('multimedia'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Descripcion:', 'descripcion'); ?>
					<?php echo form_input(['name' => 'descripcion',
													'id' => 'descripcion',
													'class' => 'form-control',
													'placeholder' => 'Descripcion',
													'autofocus'=>'autofocus',
													'value'=>"$descripcion"]); ?>
					<?php echo form_error('descripcion'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Categoria:', 'id_categoria'); ?>
					<?php echo form_input(['name' => 'id_categoria',
													'id' => 'id_categoria',
													'class' => 'form-control',
													'placeholder' => '1- Electrodomesticos - 2-Muebles',
													'value'=>"$id_categoria"]); ?>
					<?php echo form_error('id_categoria'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Precio Costo:', 'precio_costo'); ?>
					<?php echo form_input(['name' => 'precio_costo',
													'id' => 'precio_costo',
													'class' => 'form-control',
													'placeholder' => 'Precio Costo',
													'value'=>"$precio_costo"]); ?>
					<?php echo form_error('precio_costo'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Precio Venta:', 'precio_venta'); ?>
					<?php echo form_input(['name' => 'precio_venta',
													'id' => 'precio_venta',
													'class' => 'form-control',
													'placeholder' => 'Precio Venta',
													'value'=>"$precio_venta"]); ?>
					<?php echo form_error('precio_venta'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Stock:', 'stock'); ?>
					<?php echo form_input(['name' => 'stock',
													'id' => 'stock',
													'class' => 'form-control',
													'placeholder' => 'Stock',
													'value'=>"$stock"]); ?>
					<?php echo form_error('stock'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Stock minimo:', 'stock_minimo'); ?>
					<?php echo form_input(['name' => 'stock_minimo',
													'id' => 'stock_minimo',
													'class' => 'form-control',
													'placeholder' => 'Stock Minimo',
													'value'=>"$stock_minimo"]); ?>
					<?php echo form_error('stock_minimo'); ?>
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
					<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-success btn-block'"); ?>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
	<div>

	</div>
</div>
</div>
</div>
</main>
</body>
