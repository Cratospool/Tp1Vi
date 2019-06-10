<body id=body-Principal>
    <main id="main">
<?php if (!$consultas) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Consultas</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>

			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminadosConsulta'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>
	</div>

<?php } else { ?>

	<div class="container" id="tablaProd">
		<div class="well">
			<h1>Todas las Consultas</h1>
		</div>

		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminadosConsulta'); ?>">ELIMINADOS</a>
		<br> <br>
		<table class="table table-bordered ">
			<thead>
				<tr>
					<th>ID</th>
					<th>Usuario</th>
					<th>Email</th>
					<th>Reclamo</th>
					<th>Eliminado</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach($consultas->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->usuario;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->reclamo;  ?></td>
					<td><a href="<?php echo base_url("consulta_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php } ?>
</main>
