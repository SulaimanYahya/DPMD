<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_Data_Wilayah', 'm_kec');
		if (!$this->session->userdata('name')) {
			redirect('Auth');
		}
	}
	public function index()
	{
		$data = [
			'title'    => 'Dashboard',
			'username' => $this->session->userdata('name'),
			'berita'   => $this->db->get('js_berita')->result(),
		];
		$this->template->admin('admin/v_Berita', $data);
	}

	public function Form_Edit($id)
	{
		echo "<h1>" . dekrip($id) . "</h1>";
	}
}
