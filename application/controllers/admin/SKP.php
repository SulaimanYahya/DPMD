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
			'title'   => 'Data Survey',
			'kd_kec'  => $this->session->userdata('kd_kec'),
			'kd_desa' => $this->session->userdata('kd_desa'),
			'dt_skp'  => $this->db->get_where('dt_skp', (['kd_desa' => $this->session->userdata('kd_desa')]))->result(),
		];
		$this->template->admin('admin/v_SKP', $data);
	}

	function detail($idx)
	{
		$id = dekrip($idx);
		$data = [
			'title'   => 'Data Survey',
			'dt_skp'  => $this->db->get_where('dt_skp', (['id' => $id]))->result(),
		];
		$this->template->admin('admin/v_DetailSKP', $data);
	}
}
