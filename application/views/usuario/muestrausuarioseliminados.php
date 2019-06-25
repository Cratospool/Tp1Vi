<body id=body-Principal>
    <main id="main-ver-eliminados">
<?php if (!$usuarios) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Eliminados</h1>
		</div>
	</div>

<?php } else { ?>
    <br>
    <br>
    <br>
	<div  class="container">
		<div class="well">
			<center><h1 style="background: rgba(0,0,0,0.7);">Usuarios Eliminados</h1></center>
		<table id="cuadro" class="table table-bordered">
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
					<td><a href="<?php echo base_url("usuarios_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("usuarios_activa/$row->id");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php } ?>
<br>
<br>
<br>
<br>
</main>
</body>
