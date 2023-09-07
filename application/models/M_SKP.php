<?php

class M_SKP extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('dt_skp', $data); // Ganti 'nama_tabel_database' dengan nama tabel sesuai database Anda
		return $this->db->insert_id();
	}

	function getData()
	{
		return $this->db->get('dt_skp')->result();
	}
}
