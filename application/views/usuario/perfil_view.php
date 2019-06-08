<body id=body-Principal>
    <main id="main">
        <?php if (!$usuarios) { ?>

        	<div class="container">
        		<div class="well">
        			<h1>No se encontro tu perfil</h1>
        		</div>
        	</div>

        <?php } else { ?>
            <?php foreach($usuarios->result() as $row){ ?>
                <div class="container">
                    <div id="usuario" class="row" >
                        <div class="col">
                            <h1><?php echo ($row->usuario); ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="">
                            <img  width="500" src="<?php echo base_url($row->imagen) ?>" alt="foto perfil">
                        </div>
                        <div class="col">
                            <hr>
                            <hr>
                            <hr>
                            <h2>Nombre: <?php echo trim($row->nombre);  ?></h2>
                            <h2>Apellido: <?php echo trim($row->apellido); ?> </h2>
                            <h2>Email: <?php echo trim($row->email); ?> </h2>
                            <h2>Usuario: <?php echo trim($row->usuario); ?> </h2>
                            <h2>Password: <?php echo trim($row->password); ?> </h2>
                        </div>

                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-success btn-lg btn-block m-5">
                            <a href="<?php echo base_url("modifica_perfil/$row->id"); ?>">Modificar</a>
                        </button>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </main>
</body>
