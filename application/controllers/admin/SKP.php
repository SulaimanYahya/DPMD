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

	function Export()
	{
		$kd_desa = $this->session->userdata('kd_desa');
		$kd_kec = $this->session->userdata('kd_kec');
		$desa = masterGetId('desa', 'dt_desa', 'id_desa', $kd_desa);
		$kecamatan = masterGetId('kecamatan', 'dt_kecamatan', 'id_kec', $kd_kec);
		// var_dump($data);
		// die();
		date_default_timezone_set('Asia/Jakarta');
		// error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$pdf = new FPDF('P', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetAutoPageBreak(FALSE);

		$pdf->Image(base_url('uploads/BonBol.jpg'), 10, 6, 20);
		// Arial bold 15
		$pdf->SetFont('Arial', 'B', 15);
		// Move to the right
		$pdf->Cell(2);
		$pdf->Cell(2);
		$pdf->Cell(2);
		// Title
		$pdf->SetFont('Arial', 'B', 13);
		$pdf->Cell(0, 7, 'SURVEY KINERJA PELAKSANA PROGRAM KETAHANAN PANGAN', 0, 1, 'C');
		$pdf->Cell(0, 7, "DESA $desa KECAMATAN $kecamatan", 0, 1, 'C');
		$pdf->Cell(0, 7, "TAHUN " . date('Y'), 0, 1, 'C');
		$pdf->Cell(10, 7, '', 0, 1);
		// * GARIS HORIZONTAL * //
		$pdf->SetLineWidth(1);
		$pdf->Line(10, 36, 210, 36);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 37, 210, 37);
		$pdf->Cell(10, 7, '', 0, 1);

		// * GARIS HORIZONTAL * //

		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(10, 6, 'No', 1, 0, 'C');
		$pdf->Cell(170, 6, 'A. Perecanaan dan Penganggaran', 1, 0, 'L');
		$pdf->Cell(20, 6, 'Ket', 1, 0, 'C');
		$pdf->SetFont('Arial', '', 10);
		$pdf->Ln();

		$r = $this->db->get_where('dt_skp', (['kd_desa' => $kd_desa]))->row_array();

		//* A1 *//
		$pdf->Cell(10, 6, "A1", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Dokumen RPJMDes/Review RPJMDes memuat Kegiatan bidang Ketahanan Pangan.', 1, 0);
		$pdf->Cell(20, 6, $r['A1'], 1, 0, 'C');
		$pdf->Ln();

		//* A2 *//
		$pdf->Cell(10, 6, "A2", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Dokumen RKPDes Tahun 2023 memuat kegitan ketahanan pangan secara rinci.', 1, 0);
		$pdf->Cell(20, 6, $r['A2'], 1, 0, 'C');
		$pdf->Ln();

		//* A3 *//
		$pdf->Cell(10, 6, "A3", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat surat Keputusan kepala desa tentang, daftar sasaran/pekerja pada kegiatan ketahahan pangan.', 1, 0);
		$pdf->Cell(20, 6, $r['A3'], 1, 0, 'C');
		$pdf->Ln();

		//* A4 *//
		$pdf->Cell(10, 6, "A3", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Rencana Anggaran dan biaya pelaksanaan kegiatan.', 1, 0);
		$pdf->Cell(20, 6, $r['A4'], 1, 0, 'C');
		$pdf->Ln();

		//* A5 *//
		$pdf->Cell(10, 6, "A5", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat lokasi pelaksanaan kegiatan.', 1, 0);
		$pdf->Cell(20, 6, $r['A5'], 1, 0, 'C');
		$pdf->Ln();

		//* A6 *//
		$pdf->Cell(10, 6, "A6", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Surat Keputusan/Daftar Tenaga Ahli/teknik/pendamping menduduk pelaksanaan kegiatan.', 1, 0);
		$pdf->Cell(20, 6, $r['A6'], 1, 0, 'C');
		$pdf->Ln();

		//* B *//
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(10, 6, "", 1, 0, 'C');
		$pdf->Cell(170, 6, 'B. Pelaksanaan Kegiatan', 1, 0, 'L');
		$pdf->Cell(20, 6, "", 1, 0, 'C');
		$pdf->Ln();
		$pdf->SetFont('Arial', '', 10);
		//* B1 *//
		$pdf->Cell(10, 6, "B1", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat berita acara musyawarah.', 1, 0);
		$pdf->Cell(20, 6, $r['B1'], 1, 0, 'C');
		$pdf->Ln();
		//* B2 *//
		$pdf->Cell(10, 6, "B2", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat daftar Pengecekan/kontrol kegiatan PKTD oleh pelaksanaan Kegiatan/TPK.', 1, 0);
		$pdf->Cell(20, 6, $r['B2'], 1, 0, 'C');
		$pdf->Ln();
		//* B3 *//
		$pdf->Cell(10, 6, "B3", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Laporan perkembangan pelaksanaan kegiatan oleh Pelaksanaan Kegiatan/TPK.', 1, 0);
		$pdf->Cell(20, 6, $r['B3'], 1, 0, 'C');
		$pdf->Ln();
		//* B4 *//
		$pdf->Cell(10, 6, "B4", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Daftar Rincian Pembayaran Upah Harian oleh Bendahara/PK/TPK.', 1, 0);
		$pdf->Cell(20, 6, $r['B4'], 1, 0, 'C');
		$pdf->Ln();
		//* B5 *//
		$pdf->Cell(10, 6, "B5", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Bukti berupa daftar/Photo Pelaksanaan Kegiatan', 1, 0);
		$pdf->Cell(20, 6, $r['B5'], 1, 0, 'C');
		$pdf->Ln();
		//* B6 *//
		$pdf->Cell(10, 6, "B6", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Bukti atau rekomendasi tenaga ahli/pendamping terhadap perbaikan pelaksanaan kegiatan.', 1, 0);
		$pdf->Cell(20, 6, $r['B6'], 1, 0, 'C');
		$pdf->Ln();
		//* B7 *//
		$pdf->Cell(10, 6, "B7", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat berita acara musyawarah SETELAH pelaksanaan kegiatan.', 1, 0);
		$pdf->Cell(20, 6, $r['B7'], 1, 0, 'C');
		$pdf->Ln();
		//* C *//
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(10, 6, "", 1, 0, 'C');
		$pdf->Cell(170, 6, 'C. Hasil Evaluasi', 1, 0);
		$pdf->Cell(20, 6, '', 1, 0, 'C');
		$pdf->Ln();
		$pdf->SetFont('Arial', '', 10);
		//* C1 *//
		$pdf->Cell(10, 6, "C1", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Berita Acara Penyerahan Hasil ke BUMDES sebagai tindak lanjut kegiatan.', 1, 0);
		$pdf->Cell(20, 6, $r['C1'], 1, 0, 'C');
		$pdf->Ln();
		//* C2 *//
		$pdf->Cell(10, 6, "C2", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat hasil berupa aset/Uang/barang lainnya sebagai hasil kegiatan ketahanan pangan.', 1, 0);
		$pdf->Cell(20, 6, $r['C2'], 1, 0, 'C');
		$pdf->Ln();
		//* C3 *//
		$pdf->Cell(10, 6, "C3", 1, 0, 'C');
		$pdf->Cell(170, 6, 'Terdapat Bukti tindak lanjut kegiatan tahun lalu sampai dengan sekarang masih berjalan.', 1, 0);
		$pdf->Cell(20, 6, $r['C3'], 1, 0, 'C');

		// Go to 1.5 cm from bottom
		$pdf->SetY(245);
		// Select Arial italic 8
		$pdf->SetFont('Arial', 'I', 8);
		// Print centered page number
		$pdf->Cell(0, 50, 'Printed By: desa.bonebolangokab.go.id || ' . date('d/m/Y') . ' || ' . date('H:i:s'), 0, 0, 'R');
		$pdf->Output();
	}
}
