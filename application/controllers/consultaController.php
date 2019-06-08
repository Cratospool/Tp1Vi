<?php

	class consultaController extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this ->load->model('consulta_model');


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

		function index()
		{


			if($this->_veri_log()){
			$data = array('titulo' => 'Consultas');

			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('consultas' => $this->consulta_model->get_consultas() );

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('consultas-usuario/muestraConsulta', $dat);
			$this->load->view('front/footer_view');
             }else{
			redirect('login', 'refresh'); }

		}



		function muestra_eliminados()
	    {
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Consultas eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('consultas' => $this->consulta_model->not_active_consultas());

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('consultas-usuario/muestraConsultaEliminada', $dat);
			$this->load->view('front/footer_view');

			 }else{
			redirect('login', 'refresh'); }
		  }



	    function activar_consulta(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'eliminado'=>'NO'
	    	);

	    	$this->consulta_model->update_consulta($id, $data);
	    	redirect('consultas', 'refresh');
	    }

	     function eliminar_consulta(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'eliminado'=>'SI'
	    	);

	    	$this->consulta_model->update_consulta($id, $data);
	    	redirect('consultas', 'refresh');
	    }






	   	function agrega_reclamo()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('reclamo', 'Reclamo', 'required');



			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');



			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'usuario'=>$this->input->post('usuario',true),
				'email'=>$this->input->post('email',true),
				'reclamo'=>$this->input->post('reclamo',true),
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('contactos');
				$this->load->view('front/footer_view');
			}

			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$consultas = $this->consulta_model->add_consulta($data);

				//Redirecciono a la pagina de perfil
				redirect('principal');
			}
		}




}

/* End of file
*/
