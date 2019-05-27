<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Principal');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('Principal');
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
		//$this->load->view('principal.php');
		$data = array('titulo' => 'login');

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
		$this->load->view('muestraproductos');
		$this->load->view('front/footer_view');

	}
	public function muestraeliminados()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'mostrar eliminados');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('muestraeliminados');
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
		$this->load->view('modificaproducto');
		$this->load->view('front/footer_view');

	}
	

}
