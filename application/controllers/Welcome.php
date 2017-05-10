<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template');
	}

	public function index()
	{
		if($this->session->userdata('id'))
		{
			$unidad=$this->usuarios_model->getNombreunidad($this->session->userdata('id_unidad'));
			//echo $dato->nombre_unidad;exit;
			$this->session->set_userdata('nombre_unidad', $unidad->nombre_unidad);
			$this->layout->view('index');
		}
		else{
			if($this->input->post())
			{
				if($this->form_validation->run('login'))
				{
				//crear y referenciar datos existen en BD
					$datos = $this->usuarios_model->getLogin($this->input->post('correo', true),sha1($this->input->post('pass', true)));
				
					if(sizeof($datos) == 0)
					{
						$this->session->set_flashdata('css','danger');
						$this->session->set_flashdata('mensaje','Usuario no existe en la base');
						redirect(base_url());
					}else
					{
						$data=array
						(
						'registro' => date("Y-m-d"),
						'hora' => date("H:i:s"),
						'accion'=>'Inicio Sesion en la aplicacion',
						'id_usuario'=>$datos->id,
						);
						$insertar=$this->bitacora_model->insertar($data);
					//darle nomre al array general de session
						$this->session->set_userdata('user');

					//asignar datos
						$this->session->set_userdata('id',$datos->id);
						$this->session->set_userdata('nombre',$datos->nombre);
						$this->session->set_userdata('correo',$datos->correo);
						$this->session->set_userdata('id_unidad',$datos->id_unidad);
						//$this->session->set_userdata('nombre_unidad',$datos->nombre_unidad);
					//rediccionar a la app
						redirect(base_url());
					}

				//validar lo anterior
				}
			}
		
		$this->load->view('welcome/login');
		}
		
	}

	public function salir()
	{
		$data=array
		(
			'registro' => date("Y-m-d"),
			'hora' => date("H:i:s"),
			'accion'=>'Cerro Sesión en la aplicación',
			'id_usuario'=>$this->session->userdata('id'),
		);
		$insertar=$this->bitacora_model->insertar($data);
		$this->session->sess_destroy("user");
		redirect(base_url(),301);
	}
}
