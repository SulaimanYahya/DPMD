<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Data_Wilayah', 'm_kec');
	}
	public function index()
	{
		$data = [
			'dt_kec'    => $this->m_kec->getDatawilayah('dt_kecamatan', 'kecamatan')
		];
		$this->template->load('publik/v_Dashboard', $data);
	}
}
