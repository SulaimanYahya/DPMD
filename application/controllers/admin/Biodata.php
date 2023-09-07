<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Data_Wilayah', 'm_wilayah');
		$this->load->model('M_SKP', 'm_skp');
	}

	public function index()
	{
		$kd_desa = $this->session->userdata('kd_desa');
		$data = [
			'title'   => 'Biodata Surveyor',
			'biodata'  => $this->db->get_where('dt_biodata_surveyor', ([
				'kd_desa' => $this->session->userdata('kd_desa')
			]))->row_array(),
			'kd_kec' 	=> $this->session->userdata('kd_kec'),
			'kd_desa'   => $this->session->userdata('kd_desa'),
			'biodata'   => $this->db->get_where('dt_biodata_surveyor', (['kd_desa' => $kd_desa]))->row_array(),
		];
		$this->template->admin('admin/v_Biodata_Surveyor', $data);
	}

	function insert()
	{
		$cek = $this->cekData();
		$kd_desa = $this->session->userdata('kd_desa');
		$data = [
			'kd_kec'  => $this->input->post('kd_kec'),
			'kd_desa' => $this->input->post('kd_desa'),
			'nama' 	  => $this->input->post('nama'),
			'jenkel'  => $this->input->post('jenkel'),
			'jabatan' => $this->input->post('jabatan'),
			'nohp' 	  => $this->input->post('nohp'),
			'foto' 	  => '',
			'kd_desa' => $this->session->userdata('kd_desa'),
			'kd_kec'  => $this->session->userdata('kd_kec'),

		];

		if ($cek == 1) {
			$this->db->update('dt_biodata_surveyor', $data, "kd_desa='$kd_desa'");
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
			Data Berhasil Disimpan..!!
		  </div>');
			redirect('SKP/Biodata');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
			Data Berhasil Disimpan..!!
		  </div>');
			$this->db->insert('dt_biodata_surveyor', $data);
			redirect('SKP/Biodata');
		}
	}

	public function cekData()
	{
		$kd_desa = $this->session->userdata('kd_desa');
		$data = $this->db->get_where('dt_biodata_surveyor', (['kd_desa' => $kd_desa]))->num_rows();
		return $data;
	}
}
