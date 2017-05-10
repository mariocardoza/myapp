<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template');
	}

	public function index()
	{
		if($this->session->userdata('id') == 1)
		{

			$datos=$this->usuarios_model->getTodos();

			$this->layout->view('index',compact('datos'));
		}
		else
		{
			redirect(base_url());
		}
	}

	public function foto()
	{
		if($this->session->userdata('id'))
		{	
			$this->layout->view('foto');
		}else
		{
			redirect(base_url());
		}
	}

	public function upload()
	{
		if (!empty($_FILES)) 
		{
        	$tempFile = $_FILES['file']['tmp_name'];
        	$fileName = $_FILES['file']['name'];
        	$fileName = $this->session->userdata('correo').".jpg";
        	$targetPath = getcwd() . '/public/img/';
        	$targetFile = $targetPath . $fileName ;

        	move_uploaded_file($tempFile, $targetFile);

        	$data=array
					(
					'foto'=>$fileName,
					);
        	$this->usuarios_model->updateFoto($data);
        }

	}

	public function ver($id=null)
	{
		if($this->session->userdata('id'))
		{
			if(!$id){show_404();}
			$datos=$this->usuarios_model->getPorid($id);
			if(sizeof($datos)==0){show_404();}

			$this->layout->view('ver',compact('datos'));

		}else{
			redirect(base_url());
		}
	}

	public function add()
	{
		if($this->session->userdata('id') == 1)
		{
			if($this->input->post())
			{
				if($this->form_validation->run('add_usuarios'))
				{
					$data=array
					(
					'nombre'=>$this->input->post('nombre',true),
					'correo'=>$this->input->post('correo',true),
					'telefono'=>$this->input->post('telefono',true),
					'password'=>sha1($this->input->post('pass',true)),
					'id_unidad'=>$this->input->post('cargo',true),
					'foto' => 'profile_small.jpg',
					);
			$insertar=$this->usuarios_model->insertar($data);
			//echo $insertar;exit;
			$this->session->set_flashdata('css','success');
			$this->session->set_flashdata('mensaje','Se guardo correctamente');

			redirect(base_url()."usuarios");
			}
		
			}
			$datos=$this->usuarios_model->getUnidades();
			$this->layout->view('add',compact('datos'));
		}else
		{
			redirect(base_url());
		}
	}

	public function edit($id=null)
	{
		if($this->session->userdata('id') == 1)
		{
			if(!$id)
			{show_404();}
			$datos=$this->usuarios_model->getPorid($id);
			if(sizeof($datos)==0)
				{show_404();}

			if($this->input->post())
			{
				if($this->form_validation->run('edit_usuarios'))
				{
					$data=array
					(
						'nombre'=>$this->input->post('nombre',true),
						'correo'=>$this->input->post('correo',true),
						'telefono'=>$this->input->post('telefono',true),
					);
					$this->usuarios_model->update($data,$this->input->post('id',true));
					$this->session->set_flashdata('css','success');
					$this->session->set_flashdata('mensaje','Se edito correctamente');

					redirect(base_url()."usuarios");			
				}
			
			}

			$this->layout->view('edit',compact('datos','id'));
		}else
		{
			redirect(base_url());
		}

		

	}

	public function delete($id=null)
	{
		if(!$id)
		{ show_404(); }
		$datos=$this->usuarios_model->getPorid($id);
		if(sizeof($datos)==0)
			{ show_404(); }
		$result=$this->usuarios_model->delete($id);
		//echo $result;exit;
		if($result > 0)
		{
			$this->session->set_flashdata('css','success');
			$this->session->set_flashdata('mensaje','Se elimino correctamente');
		}else
		{
			$this->session->set_flashdata('css','danger');
			$this->session->set_flashdata('mensaje','No se puede eliminar el usuario');
		}
		redirect(base_url()."usuarios");
	}
}
