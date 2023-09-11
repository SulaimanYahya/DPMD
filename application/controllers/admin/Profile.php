<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('name')) {
			redirect('Auth');
		}
	}

	public function index()
	{
		$data = [
			'title'    => 'Pengaturan Akun',
			'username' => $this->session->userdata('name'),
		];
		$this->template->admin('admin/v_Profile', $data);
	}

	function edit($id)
	{
		$data = [
			'title'    => 'Edit Profile',
			'id' 	   => dekrip($id),
			'username' => $this->session->userdata('name'),
		];
		$this->template->admin('admin/v_ProfileEdit', $data);
	}
}
