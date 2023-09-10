<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ErrorPage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($kode)
	{

		if ($kode == '403') {
			$this->load->view('ErrorPage/v_403.php');
		} else {
			echo "HALAMAN TIDAK DETMUKAN";
		}
	}
}
