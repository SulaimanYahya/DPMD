<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
			'title'    => 'Dashboard',
			'username' => $this->session->userdata('name'),
		];
		$this->template->admin('admin/v_Admin', $data);
	}
}
