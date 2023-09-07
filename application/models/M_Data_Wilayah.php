<?php

class M_Data_Wilayah extends CI_Model
{
	// public $table = 'dt_kecamatan';
	// public $id = 'id_kec';

	// function __construct()
	// {
	//     parent::__construct();
	// }

	public function getDatawilayah($data, $order)
	{
		$this->db->select('*');
		$this->db->from($data);
		$this->db->order_by("$order", 'ASC');
		return $this->db->get()->result();
		// return $this->db->get($this->table)->result();
	}

	// function get_by_id($id)
	// {
	//     $this->db->where($this->id, $id);
	//     return $this->db->get($this->table)->row();
	// }

	// //* INSERT DATA
	// public function insert($data)
	// {
	//     $this->db->insert($this->table, $data);
	// }

	// //* UPDATE DATA
	// function update($id, $data)
	// {
	//     $this->db->where($this->id, $id);
	//     $this->db->update($this->table, $data);
	// }

	// //* delete data
	// function delete($id)
	// {
	//     $this->db->where($this->id, $id);
	//     $this->db->delete($this->table);
	// }
}
