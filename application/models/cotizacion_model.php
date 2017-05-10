<?php 
class cotizacion_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getCotizacion($id_proyecto)
	{
		$query = $this->db
			->select("*")
			->from("cotizacion")
			->where("id_proyecto",$id_proyecto)
			->get();
			//echo $this->db->last_query();exit;
			return $query->result();
	}
}