<body id=body-Principal>
    <main id="main-ver-eliminados">
<?php if (!$productos) { ?>
	<div class="container">
		<div class="well">
			<h1>No hay Juegos Eliminados</h1>
		</div>
	</div>
<?php } else { ?>
    <br>
    <br>
    <br>
	<div  class="container">
		<div class="well">
			<center><h1 style="background: rgba(0,0,0,0.7);">Juegos Eliminados</h1></center>
		</div>

		<table id="cuadro" class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
                    <th>Imagen</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
                    <td><img  id="imagen_view" name="imagen_view" class="img-thumbnail" width="1000"  src="<?php  echo base_url($row->imagen); ?>" ></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td>
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
					<td><a href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("productos_activa/$row->id");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php } ?>
</main>
</body>
