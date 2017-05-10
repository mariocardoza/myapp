<?php 
class proyecto_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cotizacion_model');
	}

	public function getProyecto()
	{
		$query = $this->db
			->select("id_proyecto,nombre")
			->from("proyecto")
			->get();
			//echo $this->db->last_query();exit;
			return $query->result();
	}

}