<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


		$this->load->model('producto_model');
        $this->load->library('cart');
	}


	public function index()
	{
		//$this->load->view('principal.php');
		$dat = array('productos' => $this->producto_model->get_productos());
		$data = array('titulo' => 'Principal');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('Principal', $dat);
		$this->load->view('front/footer_view');

	}
	

	public function quienes_somos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Quienes Somos');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('quienes_somos');
		$this->load->view('front/footer_view');

	}
	public function politicas_de_privacidad()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Poiticas de Privacidad');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('politicas_de_privacidad');
		$this->load->view('front/footer_view');

	}
	public function contactanos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Contactanos');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('contactanos');
		$this->load->view('front/footer_view');

	}
	public function comercializacion()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Contactanos');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('comercializacion');
		$this->load->view('front/footer_view');

	}
	public function login()
	{
		$data = array('titulo' => 'login');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('login');
		$this->load->view('front/footer_view');

	}
	public function registro()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'registro');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('registro');
		$this->load->view('front/footer_view');

	}
	public function muestraproductos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Mostrar productos');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('producto/muestraproductos');
		$this->load->view('front/footer_view');

	}
	public function muestraeliminados()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'mostrar eliminados');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('producto/muestraeliminados');
		$this->load->view('front/footer_view');

	}
	public function muestraelectrodomesticos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'mostrar electrodomesticos');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('muestraelectrodomesticos');
		$this->load->view('front/footer_view');

	}
	public function modificaproducto()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Modificar producto');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('producto/modificaproducto');
		$this->load->view('front/footer_view');

	}


}
