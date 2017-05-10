<?php 
class productos_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getTodos()
	{
		$query = $this->db
			->select("id,nombre,precio,stock,fecha")
			->from("productos")
			->order_by("id", "asc")
			->get();
			//echo $this->db->last_query();
			return $query->result();
	}

	public function getTodospaginacion($pagina, $porpagina, $quehago)
	{
		switch($quehago)
		{
			case 'limit':
				$query = $this->db
				->select("id,nombre,precio,stock,fecha")
				->from("productos")
				->limit($porpagina,$pagina)
				->get();
				return $query->result();
			break;
			case 'cuantos':
				$query = $this->db
				->select("id,nombre,precio,stock,fecha")
				->from("productos")
				->count_all_results();
				return $query;
			break;
		}
	}

	public function getPorid($id)
	{
		$query = $this->db
			->select("id,nombre,precio,stock,fecha")
			->from("productos")
			->where(array("id"=>$id))
			->get();
			//echo $this->db->last_query();
			return $query->row();
	}

	public function insertar($data=array())
	{
		$this->db->insert('productos', $data);
		//return $this->db->insert_id();
	}

	public function update($data=array(),$id)
	{
		$this->db->where('id',$id);
		$this->db->update('productos', $data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('productos');
	}
}
?>