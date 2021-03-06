<body id=body-Principal>
    <main id="main-ver-juegos">
<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<center><h1>No hay Productos</h1></center>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('agregaproducto'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestraeliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<center><h1>Todos los Productos</h1></center>
		</div>
		<a type="button" class="btn btn-success" href="<?php echo base_url('agregaproducto'); ?>">Agregar</a>
		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestraeliminados'); ?>">ELIMINADOS</a>
		<br> <br>
		<table id="cuadro" class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Imagen</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->id_categoria;  ?>
                        <?php switch ($row->id_categoria) {
                            case 1:
                                ?>
                                <img id="icono-pc" src="<?php echo base_url('assets/img/pc.png'); ?>" class="img-responsive" alt="Logo" style="height: 50px;">
                                <?php
                                break;
                            case 2:
                            ?>
                                <img id="icono-pc" src="<?php echo base_url('assets/img/ps.png'); ?>" class="img-responsive" alt="Logo" style="height: 50px;">
                                <?php
                                break;
                            case 3:
                            ?>
                            <img id="icono-pc" src="<?php echo base_url('assets/img/xbox.png'); ?>" class="img-responsive" alt="Logo" style="height: 50px;">
                            <?php
                                break;
                        } ?>
                    </td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><img  id="imagen_view" name="imagen_view" class="img-thumbnail" width="100" height="100" src="<?php  echo base_url($row->imagen); ?>" ></td>
					<td><a href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("productos_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php } ?>

</main>
</body>
