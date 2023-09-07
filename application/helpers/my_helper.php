<?php

// =================================================
//! @author 
// Name     : Sulaiman Yahya (Zul)
// Year     : 2020
// Version  : v1.0
// =================================================


function cek_login()
{
    $ci = get_instance();
    if ($ci->session->userdata('userlevel') == '9') {
        $role_id   = $ci->session->userdata('userlevel'); //5
        $halaman   = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $halaman])->row_array();

        $menu_id   = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    } else {
        redirect('Auth');
    }
}

function cekPenerima($no_kk = '')
{
    $ci = get_instance();
    // $kd = '';

    // if (strpos($kd_penduduk, 'IDV') !== false) {
    //     $kd = ltrim(substr($kd_penduduk, 0, -1), 'IDV');
    // } else {
    //     $kd = $kd_penduduk;
    // }

    // $ci->db->select('*');
    // $ci->db->where('kd_penduduk', $kd_penduduk);
    // $ci->db->or_where('kd_individu', $kd_individu);
    // $ci->db->where('asal', 'APBDES');
    // $ci->db->or_where('asal', 'APBD KAB');
    // $ci->db->or_where('asal', 'APBD PROV');
    // $ci->db->or_where('asal', 'APBDN');
    // return $ci->db->get('pemberian')->num_rows();
    $tahun = $ci->session->userdata('tahun');
    $query = "SELECT * 
                FROM pemberian 
               WHERE no_kk = '$no_kk' 
                 AND tahun = '$tahun'
                 AND (asal = 'APBD KAB' OR asal = 'APBD PROV' OR asal = 'APBN')";
    return $ci->db->query($query)->num_rows();
}

function getFieldByKDPenduduk($kd_penduduk, $field)
{
    $ci = get_instance();
    $data = $ci->db->get_where('penduduk', (['kd_penduduk' => $kd_penduduk]))->row_array();
    return $data["$field"];
}

function getNamaDesa($kd_desa)
{
    $ci = get_instance();
    $data = $ci->db->get_where('desa', (['kd_desa' => $kd_desa]))->row_array();
    return $data['desa'];
}

function getNamaKec($kd_camat)
{
    $ci = get_instance();
    $data = $ci->db->get_where('kecamatan', (['kd_camat' => $kd_camat]))->row_array();
    return $data['kecamatan'];
}

function getNamaDinas($kd_dinas)
{
    $ci = get_instance();
    $data = $ci->db->get_where('dinas', (['kd_dinas' => $kd_dinas]))->row_array();
    return $data['dinas'];
}

function getFieldPddk($kd_penduduk, $field)
{
    $ci = get_instance();
    $data = $ci->db->get_where('penduduk', (['kd_penduduk' => $kd_penduduk]))->row_array();
    return $data["$field"];
}

function getKluster() //* Total Semua Penduduk PerDesa KK+IDV
{
    // AND id_kk='1' AND aktif = 'Y' AND tahun LIKE '%$tahun%'
    // select kd_penduduk FROM penduduk where kd_penduduk like '%BLU01%'
    $ci = get_instance();

    $kd_desa = $ci->session->userdata('kd_desa');
    $tahun = $ci->session->userdata('tahun');

    $ci->db->like('kd_penduduk', $kd_desa, 'both');
    $ci->db->from('penduduk');
    return $ci->db->count_all_results();
}

function getLengkap() //* Total Semua Penduduk data (NIK, KK, id_krt, id_kk,jenkel,tempat_lahir,tgl_lahir) 
{
    // AND id_kk='1' AND aktif = 'Y' AND tahun LIKE '%$tahun%'
    $ci = get_instance();

    $kd_desa = $ci->session->userdata('kd_desa');
    $tahun = $ci->session->userdata('tahun');
    // $query = "SELECT * FROM penduduk WHERE kd_penduduk LIKE '%$kd_desa%' AND nik != '' AND no_kk != '' AND id_krt != '' AND id_kk != '' AND jenis_kelamin != '' AND tempat_lahir != '' AND tgl_lahir != ''";
    $query = "SELECT * FROM penduduk 
                WHERE kd_desa='$kd_desa' 
                  AND id_krt='1' 
                  AND id_kk='1' 
                  AND aktif = 'Y' 
                  AND kd_penduduk LIKE '$kd_desa%' 
                  AND nik != ''
                  AND tahun = '$tahun'";

    return $ci->db->query($query)->num_rows();
}

function getTidakLengkap() //* Total Semua Penduduk data kosong (NIK, KK, id_krt, id_kk,jenkel,tempat_lahir,tgl_lahir) 
{
    // AND id_kk='1' AND aktif = 'Y' AND tahun LIKE '%$tahun%'
    $ci = get_instance();

    $kd_desa = $ci->session->userdata('kd_desa');
    $tahun = $ci->session->userdata('tahun');
    // SELECT * FROM penduduk WHERE kd_desa='$kd_desa' AND id_krt='1' AND id_kk='1' AND aktif = 'Y' AND kd_penduduk LIKE '%$kd_desa%' AND tahun LIKE '%$tahun%' ORDER BY id ASC
    // $query = "SELECT * FROM penduduk WHERE kd_penduduk LIKE '$kd_desa%' AND (nik = '' OR no_kk = '' OR jenis_kelamin = '' OR id_krt = '' OR id_kk = '' OR tempat_lahir = '' OR tgl_lahir = '')";
    $query = "SELECT * FROM penduduk 
                WHERE kd_desa='$kd_desa' 
                  AND id_krt='1' 
                  AND id_kk='1' 
                  AND aktif = 'Y' 
                  AND kd_penduduk LIKE '$kd_desa%' 
                  AND (no_kk = '' OR no_kk = '0')
                  AND tahun = '$tahun'";

    return $ci->db->query($query)->num_rows();
}

function masterDelete($table, $id)
{
    $ci = get_instance();
    $tahun = $ci->session->userdata('tahun');
    if ($table == 'pemberian') {
        $ci->db->where('id', $id);
        $ci->db->where('tahun', $tahun);
        $ci->db->delete($table);
    }
    $ci->db->where('id', $id);
    $ci->db->delete($table);
}

function getOneRTM($table, $where, $id)
{
    $ci = get_instance();
    $tahun = $ci->session->userdata('tahun');
    $kd_desa = $ci->session->userdata('kd_desa');
    $query = "SELECT * FROM $table WHERE $where LIKE '%$id%' AND kd_desa='$kd_desa' AND aktif='Y'";
    return $ci->db->query($query)->result_array();
}

function masterGetId($select = '', $table, $where, $id)
{
    $ci = get_instance();
    $ci->db->select($select);
    $data = $ci->db->get_where($table, [$where => $id])->row_array();
    if ($select == '*') {
        return $data;
    } else {
        return $data[$select];
    }
}

function masterLikeId($select = '*', $table, $where, $id)
{
    $ci = get_instance();
    $query = "SELECT $select FROM $table WHERE $where = '$id'";
    $data = $ci->db->query($query)->row_array();
    return $data[$select];
}

function getNamaKK($kd_individu)
{
    $ci = get_instance();
    $data = $ci->db->get_where('penduduk', (['kd_penduduk' => $kd_individu]))->result();
    $list = '';
    foreach ($data as $r) {
        $list = $r->nm_penduduk;
    }
    return $list;
}

function HubunganKKById($id)
{
    $ci  = get_instance();
    $data = $ci->db->get_where('hubungan_kk', (['id_kk' => $id]))->result();
    $list = '';
    foreach ($data as $r) {
        $list  = $r->hubungan_kk;
    }
    return $list;
}

function HubunganKRTById($id)
{
    $ci  = get_instance();
    $list = '';
    $data = $ci->db->get_where('hubungan_krt', (['id_krt' => $id]))->result();
    foreach ($data as $r) {
        $list  = $r->hubungan_krt;
    }
    return $list;
}

function countRT($kd_camat, $desil)
{
    $ci = get_instance();

    $ci->db->select('*');
    $ci->db->from('penduduk');
    $ci->db->where('kd_camat', $kd_camat);
    // $ci->db->where('id_krt', '1');
    // $ci->db->where('desil', $desil);
    $ci->db->where('kd_individu', '');
    return $ci->db->get()->num_rows();
}

function getTahunLahir($selected = '')
{
    $mulai = (int) date('Y') - 60;
    $akhir = $mulai + 63;
    $list = '';
    for ($i = $mulai; $i <= $akhir; $i++) {
        // if ($r->tahun_lahir == $i) {
        //     echo "<option value='$i' selected>$i</option>";
        // } else {
        //     echo "<option value='$i'>$i</option>";
        // }
        $sel = ($i == $selected) ? ' selected="selected"' : '';
        $list .= "<option value='$i' $sel>$i</option>";
    }
    return $list;
}

function getBulan($selected = '')
{
    $ci = get_instance();
    $query = $ci->db->get('bulan')->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['id_bulan'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_bulan'] . "' " . $sel . ">" . $row['bulan'] . "</option>";
    }
    return $list;
}

function getTotalRTM($kd_desa, $tahun) //* HITUNG TOTAL RTM
{
    // AND id_kk='1' AND aktif = 'Y' AND tahun LIKE '%$tahun%'
    $ci = get_instance();
    $ci->db->where('kd_desa', $kd_desa);
    $ci->db->where('id_krt', '1');
    $ci->db->where('id_kk', '1');
    $ci->db->where('aktif', 'Y');
    $ci->db->like('tahun', $tahun);
    $ci->db->from('penduduk');
    return $ci->db->count_all_results();
}

function getAkumulasiDesil($desil = '') //* Hampir Miskin
{
    // AND id_kk='1' AND aktif = 'Y' AND tahun LIKE '%$tahun%'
    $ci = get_instance();

    $kd_desa = $ci->session->userdata('kd_desa');
    $tahun = $ci->session->userdata('tahun');

    $ci->db->where('kd_desa', $kd_desa);
    $ci->db->where('id_krt', '1');
    $ci->db->where('id_kk', '1');
    $ci->db->where('aktif', 'Y');
    $ci->db->where('desil', $desil);
    $ci->db->like('tahun', $tahun);
    $ci->db->from('penduduk');
    return $ci->db->count_all_results();
}

function getKODE($key = '', $kdesa = '')
{
    $ci = get_instance();

    // 1. %s = String.
    // 2. %d = desimal.
    // 3. %x = hexadesimal.
    // 4. %o = Octal.
    // 5. %f = Float.

    $query = $ci->db->query("SELECT kd_penduduk FROM penduduk 
                              WHERE kd_desa = '$kdesa'
                                AND id_krt = 1
                                AND id_kk = 1
                                AND aktif = 'Y'
                                AND kd_penduduk LIKE 'KRT-%'
                           ORDER BY kd_penduduk DESC
                            LIMIT 1")->row_array();
    $str = $query['kd_penduduk'];

    $hasil  = substr($str, -3) + 1;
    $kode   = sprintf("%03d", $hasil);
    return $key . '-' . $kdesa . $kode;
}

function getKDRTM($kd_penduduk = '')
{
    $ci = get_instance();

    // 1. %s = String.
    // 2. %d = desimal.
    // 3. %x = hexadesimal.
    // 4. %o = Octal.
    // 5. %f = Float.
    return substr($kd_penduduk, 3);
}


function getKDIDV($kd_penduduk = '')
{
    $ci = get_instance();

    // 1. %s = String.
    // 2. %d = desimal.
    // 3. %x = hexadesimal.
    // 4. %o = Octal.
    // 5. %f = Float.
    $query = $ci->db->query("SELECT COUNT(kd_individu) as total FROM penduduk WHERE kd_individu='$kd_penduduk' AND aktif='Y'");
    // $query = $ci->db->query("SELECT MAX(kd_individu) kd_individu FROM `penduduk` WHERE kd_penduduk = '$kd_penduduk'");
    $kdP = substr($kd_penduduk, 4);

    foreach ($query->result() as $row) {
        $kd = $row->total;
        $nourut = $kd + 1;
        return "IDV-" . $kdP .  $nourut;
    }
}

function getKDUSL($kdDesa)
{
    $ci = get_instance();

    // 1. %s = String.
    // 2. %d = desimal.
    // 3. %x = hexadesimal.
    // 4. %o = Octal.
    // 5. %f = Float.
    $no_urut = $ci->db->query("SELECT * FROM usulan WHERE kd_desa='$kdDesa'")->num_rows();
    $query = $ci->db->query("SELECT kd_verifikasi FROM usulan ORDER BY kd_verifikasi DESC LIMIT 1");
    // foreach ($query->result() as $row) {
    //     $string     = $row->kd_verifikasi;
    //     $kd_usl     = substr($string, 0, -6); // Hilangkan Karakter urutan ke 4 dari Belakang //*EXAMPLE : IDVBLL0100123 -> (IDV0)
    //     $kd         = substr($string, 6); // Hilangkan Karakter urutan ke 5 dari depan //*EXAMPLE : IDV00123 -> (0123)  
    //     $hasil1     = $kd + 1; //0123 + 1 = //* (124)
    //     $kdUSL      = sprintf("%04d", $hasil1); //* Zero Padding untuk menambahkan angka NOL di depan string (000124)

    // HASIL AKHIR
    // }
    $nomor = $no_urut + 1;
    return "USL-" . $kdDesa .  $nomor;
}

function getHari($tanggal)
{

    $hari   = date('l', strtotime($tanggal));
    $hari_indonesia = [
        'Monday'    => 'Senin',
        'Tuesday'   => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday'  => 'Kamis',
        'Friday'    => 'Jumat',
        'Saturday'  => 'Sabtu',
        'Sunday'    => 'Minggu'
    ];
    // echo "Tanggal $tanggal adalah hari " . $hari_indonesia[$hari];
    // Tanggal 2017-01-31 adalah hari Senin
    return $hari_indonesia[$hari];
}

function hari_ini()
{
    $hari = date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    return "<b>" . $hari_ini . "</b>";
}

function desil($selected = '')
{
    $arr = [
        'Sangat Miskin' => 'Sangat Miskin',
        'Miskin' => 'Miskin',
        'Hampir Miskin' => 'Hampir Miskin',
        'Hampir Tidak Miskin' => 'Hampir Tidak Miskin'

    ];
    $list = '';
    foreach ($arr as $key => $val) {
        $sel = ($key == $selected) ? ' selected="selected"' : '';
        $list .= "<option value=\"" . $key . "\"" . $sel . ">" . $val . "</option>\n";
    }
    unset($val);
    return $list;
}

function getPendidikan($selected = '0', $data_chained = '', $kode = '')
{
    $ci = get_instance();
    $query = $ci->db->get('pendidikan')->result_array();
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel   = ($row['id_pendidikan'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_pendidikan'] . "' " . $sel . " data-chained='$data_chained'>" . $kode . " " . $row['pendidikan'] . "</option>";
        $no++;
    }
    return $list;
}

function getPendidikan2($selected = '0', $data_chained = '', $kode = '')
{
    $ci = get_instance();
    $query = $ci->db->get('pendidikan_2')->result_array();
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['id_pendidikan_2'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_pendidikan_2'] . "' " . $sel . " data-chained='$data_chained'>" . $kode .  " " . $row['pendidikan_2'] . "</option>";
        $no++;
    }
    return $list;
}

function getKecamatan($selected = '0')
{
    $ci = get_instance();
    $query = $ci->db->get('kecamatan')->result_array();
    $ci->db->order_by('kecamatan', 'ASC');
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['kd_camat'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['kd_camat'] . "' " . $sel . ">" . $no . ". " . $row['kecamatan'] . "</option>";
        $no++;
    }
    return $list;
}

function getHubunganKRT($selected = '0')
{
    $ci = get_instance();
    $query = $ci->db->get('hubungan_krt')->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['id_krt'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_krt'] . "' " . $sel . ">" . $row['hubungan_krt'] . "</option>";
    }
    return $list;
}

function getHubunganKRTIDV($selected = '0')
{
    $ci = get_instance();
    $query = $ci->db->query("SELECT * FROM hubungan_krt LIMIT 1,10")->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['id_krt'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_krt'] . "' " . $sel . ">" . $row['hubungan_krt'] . "</option>";
    }
    return $list;
}

function getHubunganKK($selected = '0', $data_chained = '')
{
    $ci = get_instance();
    $query = $ci->db->get('hubungan_kk')->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['id_kk'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_kk'] . "' " . $sel . " data-chained='$data_chained'>" . $row['hubungan_kk'] . "</option>";
    }
    return $list;
}

function getHubunganKKIDV($selected = '0')
{
    $ci = get_instance();
    $query = $ci->db->query("SELECT * FROM hubungan_kk")->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['id_kk'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_kk'] . "' " . $sel . ">" . $row['hubungan_kk'] . "</option>";
    }
    return $list;
}


function getPekerjaan($selected = '0', $data_chained = '', $kode = '')
{
    $ci = get_instance();
    $query = $ci->db->get('pekerjaan')->result_array();
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['id_pekerjaan'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_pekerjaan'] . "' " . $sel . " data-chained='$data_chained'>" . $kode . " " . $row['pekerjaan'] . "</option>";
        $no++;
    }
    return $list;
}

function getPekerjaan2($selected = '0', $data_chained = '', $kode = '')
{
    $ci = get_instance();
    $query = $ci->db->get('pekerjaan_2')->result_array();
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['id_pekerjaan_2'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_pekerjaan_2'] . "' " . $sel . " data-chained='$data_chained'>" . $kode . " " . $row['pekerjaan_2'] . "</option>";
        $no++;
    }
    return $list;
}

function getKesehatan($selected = '0', $data_chained = '', $kode = '')
{
    $ci = get_instance();
    $query = $ci->db->get('kesehatan')->result_array();
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['id_kesehatan'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_kesehatan'] . "' " . $sel . " data-chained='$data_chained'>" . $kode . " " . $row['kesehatan'] . "</option>";
        $no++;
    }
    return $list;
}

function getKesehatan2($selected = '0', $data_chained = '', $kode = '')
{
    $ci = get_instance();
    $query = $ci->db->get('kesehatan_2')->result_array();
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['id_kesehatan_2'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_kesehatan_2'] . "' " . $sel . " data-chained='$data_chained'>" . $kode . " " . $row['kesehatan_2'] . "</option>";
        $no++;
    }
    return $list;
}

function getJenkel($selected = '0')
{
    $ci = get_instance();
    $query = $ci->db->get('jenis_kelamin')->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['jenkel'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['jenkel'] . "' " . $sel . ">" . $row['jenkel'] . "</option>";
    }
    return $list;
}

function Infrastruktur($selected = '0', $table = '', $data_chained = '', $kode = '')
{

    $ci = get_instance();

    $query = $ci->db->get($table)->result_array();
    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['id_' . $table] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['id_' . $table] . "' " . $sel . " data-chained='$data_chained'>" . $kode  . " " . $row[$table] . "</option>";
        $no++;
    }
    return $list;
}

// ENCRYPT / DECRYPT
function enkrip($string, $key = 258456)
{
    $result = '';
    for ($i = 0, $k = strlen($string); $i < $k; $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) + ord($keychar));
        $result .= $char;
    }
    return base64_encode($result);
}

function dekrip($string, $key = 258456)
{
    $result = '';
    $string = base64_decode($string);
    for ($i = 0, $k = strlen($string); $i < $k; $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) - ord($keychar));
        $result .= $char;
    }
    return $result;
}

function SumberDana($selected = '')
{
    $ci = get_instance();
    $query = $ci->db->get('sumber_dana')->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['sumber'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['sumber'] . "' " . $sel . ">" . $row['sumber'] . "</option>";
    }
    return $list;
}

function Kelompok($selected = '')
{
    $ci = get_instance();
    $query = $ci->db->get('kelompok')->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['alias'] == $selected) ? ' selected' : '';
        $list .= "<option value='" . $row['alias'] . "' " . $sel . ">" . $row['kelompok'] . "</option>";
    }
    return $list;
}

function getKDDinas($selected = '')
{
    $ci = get_instance();
    // $ci->db->select('*');
    // $ci->db->from('dinas A');
    // $ci->db->join('bantuan B', 'B.kd_dinas = A.kd_dinas', 'left');
    // $ci->db->order_by('A.id', 'ASC');
    // $query = '';
    // if ($ci->session->userdata('userlevel') == '4') {
    //     // $query = $ci->db->get_where('dinas', ['kd_dinas' => 'DESA'])->result_array();
    //     $data = "SELECT * FROM dinas WHERE kd_dinas = 'DESA' OR kd_dinas = 'DINSOS' OR kd_dinas = 'DPMD'";
    //     $query = $ci->db->query($data)->result_array();
    // } else {
    //     $query = $ci->db->get('dinas')->result_array();
    // }
    $query = $ci->db->order_by('kd_dinas', 'ASC')->where('active', 'y')->get('dinas')->result_array();
    $i = 1;
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['kd_dinas'] == $selected) ? ' selected' : '';
        $list .= "<option value='$row[kd_dinas]' $sel>" . $i++ . ". $row[dinas]</option>";
    }
    return $list;
}

function Program($selected = '')
{
    $ci = get_instance();
    // if ($ci->session->userdata('userlevel') == '4') {
    //     $data = "SELECT * FROM program WHERE kd_dinas = 'DESA' OR kd_dinas = 'DINSOS' OR kd_dinas = 'DPMD' ORDER BY program ASC";
    //     $query = $ci->db->query($data)->result_array();
    // } else {
    //     $query = $ci->db->order_by('program', 'ASC')->get('program')->result_array();
    // }
    $query = $ci->db->order_by('program', 'ASC')->get('program')->result_array();

    $list = '';
    foreach ($query as $row) {
        $sel = ($row['kd_program'] == $selected) ? ' selected' : '';
        $list .= "<option value='$row[kd_program]' data-chained='$row[kd_dinas]' $sel>$row[program]</option>";
    }
    return $list;
}

function Dinas($selected = '')
{
    $ci = get_instance();
    $userdata = $ci->session->userdata('userdata');
    if ($ci->session->userdata('userlevel') != '9') {
        $data = "SELECT * FROM dinas WHERE kd_dinas = '$userdata' ORDER BY program ASC";
        $query = $ci->db->query($data)->result_array();
    } else {
        $query = $ci->db->order_by('kd_dinas', 'ASC')->get('dinas')->result_array();
    }

    $list = '';
    $no = 1;
    foreach ($query as $row) {
        $sel = ($row['kd_dinas'] == $selected) ? ' selected' : '';
        $list .= "<option value='$row[kd_dinas]' $sel>" . $no++ . ". $row[dinas]</option>";
    }
    return $list;
}

function JenisBantuan($selected = '')
{
    $ci = get_instance();
    // $ci->db->join('program', 'bantuan.kd_program = program.kd_program');
    $query = $ci->db->order_by('bantuan', 'ASC')->get('bantuan')->result_array();
    $list = '';
    foreach ($query as $row) {
        $sel = ($row['kd_bantuan'] == $selected) ? ' selected' : '';
        $list .= "<option value='$row[kd_bantuan]' data-chained='$row[kd_program]' $sel>$row[bantuan]</option>";
    }
    return $list;
}

function Bentuk($selected = '')
{
    $ci = get_instance();

    $ci->db->order_by('bentuk', 'asc');
    $ci->db->join('program', 'bantuan.kd_program = program.kd_program');
    $query = $ci->db->get('bantuan')->result_array();
    $list = '';
    foreach ($query as $row) {
        $list .= "<option value='$row[bentuk]' class='$row[kd_program]'>$row[bentuk]</option>";
    }
    return $list;
}

// function sendtoPDF($filename = 'Laporan', $kertas = 'A4', $orientation = 'landscape')
// {
//     $ci = get_instance();
//     def("DOMPDF_ENABLE_REMOTE", TRUE);
//     $html = $ci->output->get_output();
//     $ci->dompdf->set_paper($kertas, $orientation);
//     $ci->dompdf->load_html($html);
//     $ci->dompdf->render();
//     $ci->dompdf->stream("$filename" . ".pdf", array('Attachment' => 0));
// }

// Usulan_model.php untuk mendapatkan skor
function getNilai($table, $field, $id)
{
    $ci = get_instance();
    $ci->db->select('skor');
    $query = $ci->db->get_where($table, ([$field => $id]))->result();
    $skor = '';
    foreach ($query as $r) {
        $skor = $r->skor;
    }
    return $skor;
}


function CekKelengkapanData($kd_penduduk)
{
    $ci = get_instance();

    $data = $ci->db->query("SELECT * FROM penduduk
                               WHERE kd_individu = '$kd_penduduk' 
                                 AND (no_kk < 1 OR nik < 1 OR tempat_lahir = '' OR jenis_kelamin = '' OR tgl_lahir = '')");
    return $data->num_rows();
}

function numonly($string)
{
    return preg_replace("/[^0-9]/", "", $string);
}

function letonly($string)
{
    return preg_replace("/[^a-zA-Z]/", "", $string);
}

function numletonly($string)
{
    return preg_replace("/[^a-zA-Z0-9]/", "", $string);
}

function getAlamat($kd)
{
    $ci = get_instance();

    $data = $ci->db->query("SELECT alamat FROM penduduk WHERE kd_penduduk = '$kd'")->result();
    $result = '';
    foreach ($data as $row) {
        $result = $row->alamat;
    }
    return $result;
}

function cekValidNIKKK($nik = '')
{
    $lastchar = substr("$nik", -1);
    if ($lastchar == '0') {
        return "<span style='color: red'>$nik</span>";
    } else {
        return $nik;
    }
}

function getUmur($tgl_lahir)
{
    //tanggal lahir
    $birthDt = new DateTime($tgl_lahir);
    //tanggal hari ini
    $today = new DateTime('today');
    //tahun
    $y = $today->diff($birthDt)->y;
    //bulan
    $m = $today->diff($birthDt)->m;
    //hari
    $d = $today->diff($birthDt)->d;
    if ($y < 2) {
        if ($y != 0) {
            $tahun = $y . " tahun";
        } else {
            $tahun = "";
        }
    }
    return $tahun;
}
// ENCRYPT / DECRYPT
function enc($string, $key = 258456)
{
    $result = '';
    for ($i = 0, $k = strlen($string); $i < $k; $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) + ord($keychar));
        $result .= $char;
    }
    return base64_encode($result);
}

function dec($string, $key = 258456)
{
    $result = '';
    $string = base64_decode($string);
    for ($i = 0, $k = strlen($string); $i < $k; $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) - ord($keychar));
        $result .= $char;
    }
    return $result;
}
