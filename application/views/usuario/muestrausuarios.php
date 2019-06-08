<body id=body-Principal>
    <main id="main">
<?php if (!$usuarios) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Usuarios</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('agregausuario'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestrausuarioseliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>
	</div>

<?php } else { ?>

	<div id="cuadro" class="container">
		<div class="well">
			<h1>Usuarios</h1>
		</div>
		<a type="button" class="btn btn-success" href="<?php echo base_url('agregausuario'); ?>">Agregar</a>
		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestrausuarioseliminados'); ?>">ELIMINADOS</a>
		<br> <br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Usuario</th>
					<th>Email</th>
					<th>Password</th>
					<th>Perfil</th>
					<th>Baja</th>
					<th>imagen</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->usuario;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->password;  ?></td>
					<td><?php echo $row->perfil_id;  ?></td>
					<td><?php echo $row->baja;  ?></td>
					<td><img  id="imagen_view" name="imagen_view" class="img-thumbnail" width="100" height="100" src="<?php  echo base_url($row->imagen); ?>" ></td>
					<td><a href="<?php echo base_url("usuarios_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("usuarios_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php } ?>
</main>
</body>
