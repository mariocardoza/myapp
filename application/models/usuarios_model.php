<?php 
class usuarios_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getLogin($correo, $pass)
	{
		$query = $this->db
			->select("id,nombre,correo,telefono,password,id_unidad")
			->from("usuarios")
			->where(array('correo' => $correo, 'password' => $pass))
			->get();
			//echo $this->db->last_query();exit;
			return $query->row();
	}


	public function getTodos()
	{
		$query = $this->db
			->select("*")
			->from("usuarios")
			->join('unidades','unidades.id_u = usuarios.id_unidad')
			->get();
			//echo $this->db->last_query();exit;
			return $query->result();
	}	

	public function getUnidades()
	{
		$query = $this->db
			->select("*")
			->from("unidades")
			->get();
			//echo $this->db->last_query();exit;
			return $query->result();
	}

	public function getNombreunidad($id)
	{
		$query = $this->db
		->select("nombre_unidad")
		->from("unidades")
		->where("id_u",$id)
		->get();
		//echo $this->db->last_query();exit;
		return $query->row();
	}

	public function getPorid($id)
	{
		$query = $this->db
			->select("id,nombre,correo,telefono,password,id_unidad,foto")
			->from("usuarios")
			->where("id",$id)
			->get();
			//echo $this->db->last_query();exit;
			return $query->row();
	}

	public function insertar($data=array())
	{
		$this->db->insert('usuarios', $data);
		//return $this->db->insert_id();
	}

	public function update($data=array(),$id)
	{
		$this->db->where('id',$id);
		$this->db->update('usuarios', $data);
	}

	public function updateFoto($data=array())
	{
		$this->db->where('id',$this->session->userdata('id'));
		$this->db->update('usuarios', $data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->where('id_unidad !=',1);
		$this->db->where('id !=', $this->session->userdata('id'));
		$this->db->delete('usuarios');
		//echo $this->db->last_query();exit;
		$res = $this->db->affected_rows();
		//echo $res;exit;
		return $res;
		//
	}
}
?>