<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Producto_controller extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this ->load->model('producto_model');
		}

		private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in'))
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}

		/**
	    * Muestra todos los productos en tabla
	    */
		function index()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Productos');

			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('productos' => $this->producto_model->get_productos() );

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('producto/muestraproductos', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}


		public function ver_detalle($id)
		{
			//$this->load->view('principal.php');
			$dat = array('producto' => $this->producto_model->edit_producto($id));
			$data = array('titulo' => 'Principal');

			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('producto/verproducto_view', $dat);
			$this->load->view('front/footer_view');

		}

		/**
	    * Muestra todos los electrodomesticos en tabla
	    */
		function muestra_electrodomesticos()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Electrodomesticos');

			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('productos' => $this->producto_model->get_electrodomesticos() );

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view', $data);
			$this->load->view('muestraelectrodomesticos', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
	    * Muestra todos los muebles en tabla
	    */
		function muestra_muebles()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Muebles');

			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('productos' => $this->producto_model->get_muebles() );

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('back/productos/muestramuebles_view', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
	    * Muestra formulario para agregar producto
	    */
		function form_agrega_producto()  	//Si se modifica, modificar (agrega_producto) tambien
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Agregar Producto');

			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('producto/agregaproducto');
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
	    * Verifica datos ingresados en el formulario para agregar producto
	    */
		function agrega_producto()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required|is_unique[productos.nombre]');
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'required|');
			$this->form_validation->set_rules('id_categoria', 'Categoria', 'required|numeric');
			$this->form_validation->set_rules('precio_costo', 'Precio Costo', 'required|numeric');
			$this->form_validation->set_rules('precio_venta', 'Precio Venta', 'required|numeric');
			$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
			$this->form_validation->set_rules('stock_minimo', 'Stock Minimo', 'required|numeric');
			$this->form_validation->set_rules('filename', 'Imagen', 'required|callback__image_upload');
			$this->form_validation->set_rules('multimedia', 'Multimedia', 'required|');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$this->form_validation->set_message('numeric',
							'<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>');


			if (!$this->form_validation->run())
			{
				$data = array('titulo' => 'Error de formulario');

				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];


				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('producto/agregaproducto');
				$this->load->view('front/footer_view');
			}
			else
			{
				$this->_image_upload();
			}
		}

		/**
		* Obtiene los datos del archivo imagen.
		* Permite archivos gif, jpg, png
		* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
		* En la tabla guarda la URL de donde se encuentra la imagen.
		*/
		function _image_upload()
		{
			$this->load->library('upload');

            //Comprueba si hay un archivo cargado
            if (!empty($_FILES['filename']['name']))
            {
                // Especifica la configuración para el archivo
                $config['upload_path'] = 'assets/img/productos/';
                $config['allowed_types'] = 'gif|jpg|JPEG|png';

                $config['max_size'] = '2048';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                // Inicializa la configuración para el archivo
                $this->upload->initialize($config);
				//
                if ($this->upload->do_upload('filename'))
                {
                	// Mueve archivo a la carpeta indicada en la variable $data
                    $data = $this->upload->data();

                    // Path donde guarda el archivo..
                    $url ="assets/img/productos/".$_FILES['filename']['name'];

                    // Array de datos para insertar en productos
                    $data = array(
						'descripcion'=>$this->input->post('descripcion',true),
						'id_categoria'=>$this->input->post('id_categoria',true),
						'imagen'=>$url,
						'precio_costo'=>$this->input->post('precio_costo',true),
						'precio_venta'=>$this->input->post('precio_venta',true),
						'stock'=>$this->input->post('stock',true),
						'stock_minimo'=>$this->input->post('stock_minimo',true),
						'eliminado'=>'NO',
						'nombre'=>$this->input->post('nombre',true),
						'multimedia'=>$this->input->post('multimedia',true),
					);

					$productos = $this->producto_model->add_producto($data);

					redirect('muestraproductos', 'refresh');

					return TRUE;
                }
                else
                {
                	//Mensaje de error si no existe imagen correcta
                    $imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extensión incorrecto o excede el tamaño permitido que es de: 2MB </div>';//$this->upload->display_errors();
					$this->form_validation->set_message('_image_upload',$imageerrors );

					return false;
                }

            }
            else
            {
            	//redirect('verifico_nuevoproducto');

            }
		}

		/**
	    * Muestra para modificar un producto
	    */
		function muestra_modificar()
		{
			$id = $this->uri->segment(2);
			$datos_producto = $this->producto_model->edit_producto($id);

			if ($datos_producto != FALSE) {
				foreach ($datos_producto->result() as $row)
				{
					$descripcion = $row->descripcion;
					$id_categoria = $row->id_categoria;
					$precio_costo = $row->precio_costo;
					$precio_venta = $row->precio_venta;
					$stock = $row->stock;
					$stock_minimo = $row->stock_minimo;
					$imagen = $row->imagen;
					$nombre = $row->nombre;
					$multimedia = $row->multimedia;
				}

				$dat = array('producto' =>$datos_producto,
					'id'=>$id,
					'descripcion'=>$descripcion,
					'id_categoria'=>$id_categoria,
					'precio_costo'=>$precio_costo,
					'precio_venta'=>$precio_venta,
					'stock'=>$stock,
					'stock_minimo'=>$stock_minimo,
					'imagen'=>$imagen,
					'nombre'=>$nombre,
					'multimedia'=>$multimedia,
				);
			}
			else
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar Producto');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('producto/modificaproducto', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		/**
	    * Verifica datos para modificar un producto
	    */
		function modificar_producto()
		{
			//Validación del formulario
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
			$this->form_validation->set_rules('id_categoria', 'Categoria', 'required');
			$this->form_validation->set_rules('precio_costo', 'Precio Costo', 'required|numeric');
			$this->form_validation->set_rules('precio_venta', 'Precio Venta', 'required|numeric');
			$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
			$this->form_validation->set_rules('stock_minimo', 'Stock Minimo', 'required|numeric');
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('multimedia', 'Multimedia', 'required');


			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>');

			$id = $this->uri->segment(2);
			$datos_producto = $this->producto_model->edit_producto($id);

			foreach ($datos_producto->result() as $row)
			{
				$imagen = $row->imagen;
			}

			$dat = array(
				'id'=>$id,
				'descripcion'=>$this->input->post('descripcion',true),
				'id_categoria'=>$this->input->post('id_categoria',true),
				'precio_costo'=>$this->input->post('precio_costo',true),
				'precio_venta'=>$this->input->post('precio_venta',true),
				'stock'=>$this->input->post('stock',true),
				'stock_minimo'=>$this->input->post('stock_minimo',true),
				'imagen'=>$imagen,
				'nombre'=>$this->input->post('nombre',true),
				'multimedia'=>$this->input->post('multimedia',true),
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('producto/modificaproducto', $dat);
				$this->load->view('front/footer_view');
			}
			else
			{
				$this->_image_modif();
			}

		}

		/**
		* Obtiene los datos del archivo imagen.
		* Permite archivos gif, jpg, png
		* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
		* Si el campo imagen se encuentra vacio asume que la imagen no fue moficado.
		* En la tabla guarda la URL de donde se encuentra la imagen.
		*/

	    function _image_modif()
	    {
			//Cargo la libreria para subir archivos
	    	$this->load->library('upload');

			// Obtengo el id del libro
	    	$id = $this->uri->segment(2);

	        // Array de datos para obtener datos de libros sin la imagen
	    	$dat = array(
				'id'=>$id,
				'descripcion'=>$this->input->post('descripcion',true),
				'id_categoria'=>$this->input->post('id_categoria',true),
				'precio_costo'=>$this->input->post('precio_costo',true),
				'precio_venta'=>$this->input->post('precio_venta',true),
				'stock'=>$this->input->post('stock',true),
				'stock_minimo'=>$this->input->post('stock_minimo',true),
				'nombre'=>$this->input->post('nombre',true),
				'multimedia'=>$this->input->post('multimedia',true),
			);

			// Si la iamgen esta vacia se asume que no se modifica
	    	if (!empty($_FILES['filename']['name']))
	    	{
	            // Especifica la configuración para el archivo
	    		$config['upload_path'] = 'assets/img/productos/';
	    		$config['allowed_types'] = 'gif|jpg|jpeg|png';

	    		$config['max_size'] = '2048';
	    		$config['max_width']  = '1024';
	    		$config['max_height']  = '768';

	            // Inicializa la configuración para el archivo
	    		$this->upload->initialize($config);

	    		if ($this->upload->do_upload('filename'))
	    		{
	                	// Mueve archivo a la carpeta indicada en la variable $data
	    			$data = $this->upload->data();

	                    // Path donde guarda el archivo..
	    			$url ="assets/img/productos/".$_FILES['filename']['name'];

	                 	// Agrego la imagen si se modifico.
	    			$dat['imagen']=$url;

						// Actualiza datos del libro
	    			$this->producto_model->update_producto($id, $dat);
	    			redirect('muestraproductos', 'refresh');
	    		}
	    		else
	    		{
	                	//Mensaje de error si no existe imagen correcta
	    			$imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extención incorrecto o excede el tamaño permitido que es de: 2MB </div>';
	    			$this->form_validation->set_message('_image_modif',$imageerrors );
	    			return false;
	    		}
	    	}
	    	else
	    	{
	    		$this->producto_model->update_producto($id, $dat);
	    		redirect('muestraproductos', 'refresh');
	    	}
	    }


	    /**
		* Obtiene los datos del producto a eliminar
		*/
	    function eliminar_producto(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'eliminado'=>'SI'
	    	);

	    	$this->producto_model->estado_producto($id, $data);
	    	redirect('muestraproductos', 'refresh');
	    }

	    /**
		* Obtiene los datos del producto a activar
		*/
	    function activar_producto(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'eliminado'=>'NO'
	    	);

	    	$this->producto_model->estado_producto($id, $data);
	    	redirect('muestraproductos', 'refresh');
	    }

	    /**
		* Productos eliminados logicamente
		*/
	    function muestra_eliminados()
	    {
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Productos eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array(
		        'productos' => $this->producto_model->not_active_productos()
			);

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('producto/muestraeliminados', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		function listar_ventas()
		    {
	             if($this->_veri_log()){
				$data = array('titulo' => 'Ventas');

				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];


				$dat = array('ventas_cabecera' => $this->producto_model->get_ventas_cabecera());

				$this->load->view('front/head_view',$data);
				$this->load->view('front/navbar_view',$data);
				$this->load->view('consultas/muestraventas',$dat);
				$this->load->view('front/footer_view');
	            }else{
				redirect('login', 'refresh');
	            }
	         }


	        function muestra_detalle($id)
			{
	             if($this->_veri_log()){
				$data = array('titulo' => 'Detalle');

					$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$dat = array('ventas_detalle' => $this->producto_model->get_ventas_detalle($id));

					$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view', $data);
				$this->load->view('consultas/muestradetalle', $dat);
				$this->load->view('front/footer_view');
	            }else{
				redirect('login', 'refresh');
	            }
	        }

			function busqueda()
		    {
				$dato = array('titulo' => 'Busqueda');
		        //Genero las reglas de validacion
		        $this->form_validation->set_rules('busqueda', 'Busqueda');



		        //Preparo los datos para guardar en la base, en caso de que pase la validacion
		        $data = $this->input->post('busqueda',true);


		        //Si pasa la validacion de datos

		            $dat = array('productos' => $this->producto_model->busqueda_producto($data));
		            //Muestra la página de registro con el título de error

		            $this->load->view('front/head_view',$dato);
		            $this->load->view('front/navbar_view');
		            $this->load->view('Principal',$dat);
		            $this->load->view('front/footer_view');


		    }

			function indexUsuario()
			{


				if($this->_veri_log()){
				$data = array('titulo' => 'Consultas');

				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$dat = array('ventas_cabecera' => $this->producto_model->get_ventas_cabecera() );
				$dat['id2'] = $session_data['id'];

				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('consultas/muestraventasUsuario', $dat);
				$this->load->view('front/footer_view');
	             }else{
				redirect('login', 'refresh'); }

			}



	}
/* End of file
*/
