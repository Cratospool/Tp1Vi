<body>
    <main id="main-contactanos">
        <div class="container p-5"  id="formulario">
            <center><h2 style="color:white;">Contactanos</h2></center>
        	<div style="margin: 2%;">
        	 	<?php echo validation_errors(); ?>
        	      <!-- Genero el formulario para crear una consulta -->
        	    <div class="well bs-component form-horizontal">
        	        <?php echo form_open('verifico_nuevaconsulta',
        	        ['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
        	    </div>
        		<form>
        	  <div class="row">
        	    <div class="col">

        	     <div class="form-group">

        	            <div class="col">
        	              <?php echo form_input(['name' => 'usuario',
        	                          'id' => 'usuario',
        	                          'class' => 'form-control',
        	                          'placeholder' => 'Usuario',
        	                          'required'=>'required',
        	                          'autofocus'=>'autofocus',
        	                          'value'=>set_value('usuario')]); ?>
        	            </div>
        	          </div>
        	    </div>
        		<div class="col">
        		  <div class="form-group">

        				<div class="col">
        				  <?php echo form_input(['type'=>'email',
        							  'name' => 'email',
        							  'id' => 'email',
        							  'class' => 'form-control',
        							  'placeholder' => 'Email',
        							  'required'=>'required',
        							  'value'=>set_value('email')]); ?>
        				</div>
        			  </div>
        		</div>
        	  </div>
        	  <br><br>

        	  <div class="form-group">
        	        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
        	        <div class="form-group">
                        <div class ="col-md-8"class="form-control" id="message" name="message"  rows="7">
            	            <?php echo form_input(['type'=>'textarea',
            	                                    'name'=>'reclamo',
            	                                    'id' => 'reclamo',
            	                            'class' => 'form-control',
            	               'placeholder' => 'Escriba su consulta',
            	                                'required'=>'required',
            	                       'value'=>set_value('reclamo')]); ?>
            	        </div>
        	        </div>
        	   </div>


        	<div class="col-lg-3 col-lg-offset-4">
        	       <?php echo form_submit('submit', 'Enviar',"class='btn btn-success' "); ?>
        		    <?php echo form_close(); ?>
        	</div>
        	</form>
        	</div>
        </div>
        <br>
        <br>
    </main>
</body>
