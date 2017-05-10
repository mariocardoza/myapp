<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ofertas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template');
		$this->load->model('ofertas_model');
	}

	public function index()
	{
		$datos=$this->proyecto_model->getProyecto();
		$datos2=$this->ofertas_model->getOfertante();
		$this->layout->view('index',compact('datos','datos2'));
	}

	public function cotizaciones($id)
	{
		$datos = $this->cotizacion_model->getCotizacion($id);
 		echo json_encode($datos);
	}

	public function add()
	{
		$datos=$_POST;
		if($this->input->is_ajax_request())
		{
			if($this->ofertas_model->guardarOfertante($datos) == true)
			{
				$this->session->set_flashdata('css','success');
				$this->session->set_flashdata('mensaje','Se guardo correctamente');

				redirect(base_url()."ofertas");
			}
		}
		$this->layout->view('add');
	}

}