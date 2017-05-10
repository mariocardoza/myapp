<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template');
	}

	public function index()
	{
		if($this->session->userdata('id'))
		{

			$datos=$this->productos_model->getTodos();

			$this->layout->view('index',compact('datos'));
		}
		else
		{
			redirect(base_url()."acceso/login");
		}
	}

	public function listado()
	{
		//configuracion inicial
		if($this->uri->segment(3))
		{
			$pagina = $this->uri->segment(3);
			//echo $pagina;exit;
		}
		else
		{
			$pagina = 0;
			//echo $pagina;exit;
		}
		$porpagina=10;

		$datos=$this->productos_model->getTodospaginacion($pagina,$porpagina,'limit');
		$cuantos=$this->productos_model->getTodospaginacion($pagina,$porpagina,'cuantos');

		//libreria pagination
		$config['base_url'] = base_url() . "productos/listado";
		$config['total_rows'] = $cuantos;
		$config['per_page'] = $porpagina;
		$config['uri_segment'] =3;
		$config['num_links']='4';
        $config['first_link']='Primero';
        $config['next_link']='Siguiente';
        $config['prev_link']='Anterior';
        $config['last_link']='Última';
        
        $config['full_tag_open']='<ul class="pagination">';
        
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        

        $config['full_tag_close']='</ul>';

		$this->pagination->initialize($config);

		$this->layout->view('listado',compact('datos','cuantos', 'pagina'));
	}

	public function add()
	{
		if($this->input->post())
		{
			if($this->form_validation->run('add_formulario'))
			{
				$data=array
				(
				'nombre'=>$this->input->post('nombre',true),
				'precio'=>$this->input->post('precio',true),
				'stock'=>$this->input->post('stock',true),
				'fecha'=>$this->input->post('fecha',true),
				);
		$insertar=$this->productos_model->insertar($data);

		$data2=array
		(
			'registro' => date("Y-m-d"),
			'hora' => date("H:i:s"),
			'accion'=>'Agrego un producto',
			'id_usuario'=>$this->session->userdata('id'),
		);
		$insertar=$this->bitacora_model->insertar($data2);
		//echo $insertar;exit;
		$this->session->set_flashdata('css','success');
		$this->session->set_flashdata('mensaje','Se guardo correctamente');

		redirect(base_url()."productos");
			}
		
		}

		$this->layout->view('add');
	}

	public function edit($id=null)
	{
		if(!$id)
		{show_404();}
		$datos=$this->productos_model->getPorid($id);
		if(sizeof($datos)==0)
			{show_404();}

		if($this->input->post())
		{
			if($this->form_validation->run('add_formulario'))
			{
				$data=array
				(
					'nombre'=>$this->input->post('nombre',true),
					'precio'=>$this->input->post('precio',true),
					'stock'=>$this->input->post('stock',true),
					'fecha'=>$this->input->post('fecha',true),
				);
				$this->productos_model->update($data,$this->input->post('id',true));
				$this->session->set_flashdata('css','success');
				$this->session->set_flashdata('mensaje','Se edito correctamente');

				redirect(base_url()."productos");			
			}
			
		}

		$this->layout->view('edit',compact('datos','id'));

	}

	public function delete($id=null)
	{
		if(!$id)
		{ show_404(); }
		$datos=$this->productos_model->getPorid($id);
		if(sizeof($datos)==0)
			{ show_404(); }

		$this->productos_model->delete($id);
		$this->session->set_flashdata('css','success');
		$this->session->set_flashdata('mensaje','Se elimino correctamente');

		redirect(base_url()."productos");
	}
}
