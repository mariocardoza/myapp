<?php 
class ofertas_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('cotizacion_model');
	}

	public function getOfertante()
	{
		$query = $this->db
			->select("*")
			->from("ofertantes")
			->get();
			//echo $this->db->last_query();exit;
			return $query->result();
	}

	public function guardarOfertante($datos)
	{
		$this->db->insert('ofertantes',$datos);

		if($this->db->affected_rows()>0){
			return true;
		}else
		{
			return false;
		}
	}

}