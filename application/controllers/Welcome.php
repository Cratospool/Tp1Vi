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

}
