<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SKP extends CI_Controller
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
			'dt_kec'  => $this->m_wilayah->getDatawilayah('dt_kecamatan', 'kecamatan'),
			'dt_desa' => $this->m_wilayah->getDatawilayah('dt_desa', 'kd_camat'),
			'dt_skp'  => $this->db->get('dt_skp')->result(),
		];
		$this->template->load('publik/v_SKP', $data);
	}

	function detail($id)
	{
		$data = [
			'dt_skp'  => $this->db->get_where('dt_skp', (['id' => $id]))->result(),
		];

		$this->template->load('publik/v_DetailSKP', $data);
	}
}
