<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TambahSKP extends CI_Controller
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
			'dt_kec'    => $this->m_wilayah->getDatawilayah('dt_kecamatan', 'kecamatan'),
			'dt_desa'   => $this->m_wilayah->getDatawilayah('dt_desa', 'kd_camat'),
		];

		$this->template->load('publik/v_TambahSKP', $data);
	}

	public function insert()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'png|jpeg|jpg|png';
		$config['max_size']             = '4050';

		$foto_A3 = $_FILES['foto_A3']['name'];
		$foto_B1 = $_FILES['foto_B1']['name'];
		$foto_B2 = $_FILES['foto_B2']['name'];
		$foto_B3 = $_FILES['foto_B3']['name'];
		$foto_B4 = $_FILES['foto_B4']['name'];
		$foto_B5 = $_FILES['foto_B5']['name'];
		$foto_B6 = $_FILES['foto_B6']['name'];
		$foto_B7 = $_FILES['foto_B7']['name'];
		$foto_C1 = $_FILES['foto_C1']['name'];
		$foto_C2 = $_FILES['foto_C2']['name'];
		$foto_C3 = $_FILES['foto_C3']['name'];

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$this->upload->do_upload('foto_A3');
		$this->upload->do_upload('foto_B1');
		$this->upload->do_upload('foto_B2');
		$this->upload->do_upload('foto_B3');
		$this->upload->do_upload('foto_B4');
		$this->upload->do_upload('foto_B5');
		$this->upload->do_upload('foto_B6');
		$this->upload->do_upload('foto_B7');
		$this->upload->do_upload('foto_C1');
		$this->upload->do_upload('foto_C2');
		$this->upload->do_upload('foto_C3');

		$data = [
			'kecamatan' 	 => masterGetId('kecamatan', 'dt_kecamatan', 'id_kec', $this->input->post('kecamatan')),
			'desa' 			 => masterGetId('desa', 'dt_desa', 'id_desa', $this->input->post('desa')),
			'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
			'sub_kegiatan' 	 => $this->input->post('subkegiatan'),
			'tahun' 		 => $this->input->post('tahun'),
			'A1' 		 	 => $this->input->post('A1'),
			'A2' 		 	 => $this->input->post('A2'),
			'A3' 		 	 => $this->input->post('A3'),
			'A4' 		 	 => $this->input->post('A4'),
			'A5' 		 	 => $this->input->post('A5'),
			'A6' 		 	 => $this->input->post('A6'),
			'B1' 		 	 => $this->input->post('B1'),
			'B2' 		 	 => $this->input->post('B2'),
			'B3' 		 	 => $this->input->post('B3'),
			'B4' 		 	 => $this->input->post('B4'),
			'B5' 		 	 => $this->input->post('B5'),
			'B6' 		 	 => $this->input->post('B6'),
			'B7' 		 	 => $this->input->post('B7'),
			'C1' 		 	 => $this->input->post('C1'),
			'C2' 		 	 => $this->input->post('C2'),
			'C3' 		 	 => $this->input->post('C3'),
			'foto_A3' 		 => $foto_A3,
			'foto_B1' 		 => $foto_B1,
			'foto_B2' 		 => $foto_B2,
			'foto_B3' 		 => $foto_B3,
			'foto_B4' 		 => $foto_B4,
			'foto_B5' 		 => $foto_B5,
			'foto_B6' 		 => $foto_B6,
			'foto_B7' 		 => $foto_B7,
			'foto_C1' 		 => $foto_C1,
			'foto_C2' 		 => $foto_C2,
			'foto_C3' 		 => $foto_C3,
		];
		$insert = $this->m_skp->insert($data);
		if ($insert) {
			// Insert berhasil
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
			Data Berhasil Disimpan..!!
		  </div>');
			redirect('SKP'); // Ganti 'success' dengan halaman yang sesuai
		} else {
			// Insert gagal
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
			Data Gagal Disimpan..!!
		  </div>');
			redirect('SKP'); // Ganti 'error' dengan halaman yang sesuai
		}
	}
}
