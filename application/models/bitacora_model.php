<?php 
date_default_timezone_set('America/El_Salvador');
class bitacora_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insertar($data=array())
	{
		//$this->db->set("registro", 'date("Y-m-d")', FALSE);
		//$this->db->set("hora", 'date("H:i:s")', FALSE);
		$this->db->insert('bitacora', $data);
	}

}