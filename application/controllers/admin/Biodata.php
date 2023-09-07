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
		$data = [
			'title'   => 'Biodata Surveyor',
			'biodata'  => $this->db->get_where('dt_biodata_surveyor', ([
				'kd_desa' => $this->session->userdata('kd_desa')
			]))->row_array(),
			'kd_kec' 	=> $this->session->userdata('kd_kec'),
			'kd_desa'   => $this->session->userdata('kd_desa'),
		];
		$this->template->admin('admin/v_Biodata_Surveyor', $data);
	}

	function detail($id)
	{
		$data = [
			'dt_skp'  => $this->db->get_where('dt_skp', (['id' => $id]))->result(),
		];

		$this->template->load('publik/v_DetailSKP', $data);
	}
}
