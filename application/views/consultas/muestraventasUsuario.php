<body id=body-Principal>
    <main id="main">
<div class="container">
	<div class="well">
	<br>
     <?php if (!$ventas_cabecera) { ?>

	<div class="container">
		<div class="well">
			<h1>No se realizaron Ventas</h1>
            <hr>
		</div>

	</div>

<?php } else { ?>
<div class="container">
	<div class="well">
		<h1><b>Compras Realizadas</b></h1>
	</div>
	<br>
	<table  class="table table-bordered" >
<!--        table table-bordered-->
		<thead>
			<tr>
				<th>ID</th>
				<th>Fecha</th>
				<th>Total</th>
				<th> Detalle</th>

			</tr>
		</thead>
		<tbody>
            <?php foreach($ventas_cabecera->result() as $row){ ?>
                <?php if($row->usuario_id == $id2){ ?>
			<tr>
				<td><?php echo $row->id;  ?></td>
                <td><?php echo $row->fecha;  ?></td>
                <td><?php echo $row->total_venta;  ?></td>



				<td><a href="<?php echo base_url("muestra_detalle/$row->id");?>">Detalle</a></td>
			</tr>
        <?php } ?>
			<?php } ?>
		</tbody>
	</table>
	<?php } ?>
</div>
            </div>
        </div>
</main>
</body>
