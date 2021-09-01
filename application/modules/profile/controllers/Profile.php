<?php
defined('BASEPATH') or exit('No direct script access allowed ');
class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
	}

	public function index()
	{
		if ($this->session->userdata('spcp') != NULL) {

			$data = $this->Profile_model->get_data();
			$x['data'] = $data[0];

			// var_dump($data);
			// exit;

			$prodii = $this->Profile_model->prod();
			$x['prodii'] = $prodii;

			$prov = $this->Profile_model->get_provinsi()->result();
			$x['prov'] = $prov;

			$agamaa = $this->Profile_model->agama()->result();
			$x['agamaa'] = $agamaa;
			// var_dump($agamaa);exit;

			$jenistinggal = $this->Profile_model->jenistinggal()->result();
			$x['jenistinggal'] = $jenistinggal;

			$prodi = $this->Profile_model->prodi()->result();
			$x['prodi'] = $prodi;

			$kewarganegaraan = $this->Profile_model->kewarganegaraan()->result();
			$x['kewarganegaraan'] = $kewarganegaraan;

			$jenispendaftaran = $this->Profile_model->jenispendaftaran()->result();
			$x['jenispendaftaran'] = $jenispendaftaran;

			$pembiayaan = $this->Profile_model->pembiayaan()->result();
			$x['pembiayaan'] = $pembiayaan;

			$jalurmasuk = $this->Profile_model->jalurmasuk()->result();
			$x['jalurmasuk'] = $jalurmasuk;

			$pendidikan = $this->Profile_model->pendidikan()->result();
			$x['pendidikan'] = $pendidikan;

			$pekerjaan = $this->Profile_model->pekerjaan()->result();
			$x['pekerjaan'] = $pekerjaan;

			$penghasilan = $this->Profile_model->penghasilan()->result();
			$x['penghasilan'] = $penghasilan;

			$alattransportasi = $this->Profile_model->alattransportasi()->result();
			$x['alattransportasi'] = $alattransportasi;

			$mulaisemester = $this->Profile_model->mulaisemester()->result();
			$x['mulaisemester'] = $mulaisemester;

			$fakulll = $this->Profile_model->get_fakultas()->result();
			$x['fakulll'] = $fakulll;

			$proddd = $this->Profile_model->get_prodi()->result();
			$x['proddd'] = $proddd;

			$get_prodisepuluh = $this->Profile_model->get_prodisepuluh()->result();
			$x['get_prodisepuluh'] = $get_prodisepuluh;


			$wilayah = $this->Profile_model->get_will()->result();
			$x['wilayah'] = $wilayah;

			$kecc = $this->Profile_model->get_namakecamatan()->result();
			$x['kecc'] = $kecc;

			$kampus = $this->Profile_model->get_kampus()->result();
			$x['kampus'] = $kampus;

			$this->load->view('profile', $x);
			$this->load->view('include/alert');
		} else {
			redirect('login');
		}
	}

	public function edit()
	{
		if ($this->session->userdata('spcp') != NULL) {
			$editnya['npp'] = $this->input->post('npp', true);
			$editnya['no_spcp'] = $this->input->post('no_spcp', true);
			$editnya['nama'] = $this->input->post('nama', true);
			$editnya['jk'] = $this->input->post('jk', true);
			$editnya['nisn'] = $this->input->post('nisn', true);
			$editnya['npwp'] = $this->input->post('npwp', true);
			$editnya['nik_praja'] = $this->input->post('nik_praja', true);
			$editnya['tmpt_lahir'] = $this->input->post('tmpt_lahir', true);
			$editnya['tgl_lahir'] = $this->input->post('tgl_lahir', true);
			$editnya['alamat'] = $this->input->post('alamat', true);
			$editnya['rt'] = $this->input->post('rt', true);
			$editnya['rw'] = $this->input->post('rw', true);
			$editnya['nama_dusun'] = $this->input->post('nama_dusun', true);
			$editnya['kelurahan'] = $this->input->post('kelurahan', true);
			$editnya['kode_pos'] = $this->input->post('kode_pos', true);
			$editnya['kab_kota'] = $this->input->post('kab_kota', true);
			$editnya['provinsi'] = $this->input->post('provinsi', true);
			$editnya['agama'] = $this->input->post('agama', true);
			$editnya['kecamatan'] = $this->input->post('kecamatan', true);
			$editnya['tlp_pribadi'] = $this->input->post('tlp_pribadi', true);
			$editnya['tlp_rumah'] = $this->input->post('tlp_rumah', true);
			$editnya['email'] = $this->input->post('email', true);

			$editnya['penerima_pks'] = $this->input->post('penerima_pks', true);
			$editnya['no_pks'] = $this->input->post('no_pks', true);
			$editnya['tgl_masuk_kuliah'] = $this->input->post('tgl_masuk_kuliah', true);
			$editnya['tahun_masuk_kuliah'] = $this->input->post('tahun_masuk_kuliah', true);
			$editnya['status'] = $this->input->post('status', true);
			$editnya['tingkat'] = $this->input->post('tingkat', true);
			$editnya['angkatan'] = $this->input->post('angkatan', true);
			$editnya['fakultas'] = $this->input->post('fk', true);
			$editnya['biaya_masuk'] = $this->input->post('biaya_masuk', true);
			$editnya['mulai_semester'] = $this->input->post('mulai_semester', true);
			$editnya['jenis_tinggal'] = $this->input->post('jenis_tinggal', true);
			$editnya['alat_transport'] = $this->input->post('alat_transport', true);
			$editnya['kewarganegaraan'] = $this->input->post('kewarganegaraan', true);
			$editnya['pembiayaan'] = $this->input->post('pembiayaan', true);
			$editnya['jalur_masuk'] = $this->input->post('jalur_masuk', true);
			$editnya['nik_ayah'] = $this->input->post('nik_ayah', true);
			$editnya['nama_ayah'] = $this->input->post('nama_ayah', true);
			$editnya['tgllahir_ayah'] = $this->input->post('tgllahir_ayah', true);
			$editnya['pendidikan_ayah'] = $this->input->post('pendidikan_ayah', true);
			$editnya['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah', true);
			$editnya['penghasilan_ayah'] = $this->input->post('penghasilan_ayah', true);
			$editnya['tlp_ayah'] = $this->input->post('tlp_ayah', true);
			$editnya['nik_ibu'] = $this->input->post('nik_ibu', true);
			$editnya['nama_ibu'] = $this->input->post('nama_ibu', true);
			$editnya['tgllahir_ibu'] = $this->input->post('tgllahir_ibu', true);
			$editnya['pendidikan_ibu'] = $this->input->post('pendidikan_ibu', true);
			$editnya['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu', true);
			$editnya['penghasilan_ibu'] = $this->input->post('penghasilan_ibu', true);
			$editnya['tlp_ibu'] = $this->input->post('tlp_ibu', true);
			$editnya['nik_wali'] = $this->input->post('nik_wali', true);
			$editnya['nama_wali'] = $this->input->post('nama_wali', true);
			$editnya['tgllahir_wali'] = $this->input->post('tgllahir_wali', true);
			$editnya['pendidikan_wali'] = $this->input->post('pendidikan_wali', true);
			$editnya['pekerjaan_wali'] = $this->input->post('pekerjaan_wali', true);
			$editnya['penghasilan_wali'] = $this->input->post('penghasilan_wali', true);
			$editnya['tlp_wali'] = $this->input->post('tlp_wali', true);
			$editnya['jenis_pendaftaran'] = $this->input->post('jenis_pendaftaran', true);
			$editnya['penempatan'] = $this->input->post('penempatan', true);
			$editnya['status'] = $this->input->post('status', true);
			$editnya['angkatan'] = $this->input->post('angkatan', true);
			$editnya['tingkat'] = $this->input->post('tingkat', true);
			$editnya['asdaf'] = $this->input->post('asdaf', true);
			$tudey = date("Y-m-d H:i:s");
			$editnya['update_date'] = $tudey;
			$data = $this->Profile_model->get_data();
			$x['data'] = $data[0];

			$implodeprodi = implode(",", $this->input->post('prodii', true));
			$explodeprodi = explode(",", $implodeprodi);

			$editnya['prodi'] = LTRIM($explodeprodi[0]);
			$editnya['prodi2'] = LTRIM($explodeprodi[1]);
			$editnya['prodi3'] = LTRIM($explodeprodi[2]);
			$editnya['prodi4'] = LTRIM($explodeprodi[3]);
			$editnya['prodi5'] = LTRIM($explodeprodi[4]);
			$editnya['prodi6'] = LTRIM($explodeprodi[5]);
			$editnya['prodi7'] = LTRIM($explodeprodi[6]);
			$editnya['prodi8'] = LTRIM($explodeprodi[7]);
			$editnya['prodi9'] = LTRIM($explodeprodi[8]);
			$editnya['prodi10'] = LTRIM($explodeprodi[9]);


			$result = $this->Profile_model->editpraja($editnya);

			if (!$result) {
				$this->session->set_flashdata('success', 'Gagal Mengubah Data');
				redirect('profile');
			} else {
				$this->session->set_flashdata('success', 'Berhasil Mengubah Data');
				redirect('profile');
			}

			// foreach ($data as $x) {
			// 	$prodi = $x->prodi;
			// 	$prodi2 = $x->prodi2;
			// 	$prodi3 = $x->prodi3;
			// 	$prodi4 = $x->prodi4;
			// 	$prodi5 = $x->prodi5;
			// 	$prodi6 = $x->prodi6;
			// 	$prodi7 = $x->prodi7;
			// 	$prodi8 = $x->prodi8;
			// 	$prodi9 = $x->prodi9;


			// 	if ($prodi == NULL) {

			// 		$implodeprodi = implode(",", $this->input->post('prodii', true));
			// 		$explodeprodi = explode(",", $implodeprodi);
			// 		$total = count($explodeprodi);


			// 		if ($total < 10) {
			// 			$this->session->set_flashdata('success', 'Lengkapi Program Studi');
			// 			redirect('profile');
			// 		} else {
			// 			$editnya['prodi'] = $explodeprodi[0];
			// 			$editnya['prodi2'] = $explodeprodi[1];
			// 			$editnya['prodi3'] = $explodeprodi[2];
			// 			$editnya['prodi4'] = $explodeprodi[3];
			// 			$editnya['prodi5'] = $explodeprodi[4];
			// 			$editnya['prodi6'] = $explodeprodi[5];
			// 			$editnya['prodi7'] = $explodeprodi[6];
			// 			$editnya['prodi8'] = $explodeprodi[7];
			// 			$editnya['prodi9'] = $explodeprodi[8];
			// 		}
			// 	} else {

			// 		$editnya['prodi'] = $prodi;
			// 		$editnya['prodi2'] = $prodi2;
			// 		$editnya['prodi3'] = $prodi3;
			// 		$editnya['prodi4'] = $prodi4;
			// 		$editnya['prodi5'] = $prodi5;
			// 		$editnya['prodi6'] = $prodi6;
			// 		$editnya['prodi7'] = $prodi7;
			// 		$editnya['prodi8'] = $prodi8;
			// 		$editnya['prodi9'] = $prodi9;
			// 	}

			// 	$result = $this->Profile_model->editpraja($editnya);

			// 	if (!$result) {
			// 		$this->session->set_flashdata('success', 'Gagal Mengubah Data');
			// 		redirect('profile');
			// 	} else {
			// 		$this->session->set_flashdata('success', 'Berhasil Mengubah Data');
			// 		redirect('profile');
			// 	}
			// 	// var_dump($editnya);
			// 	// exit;
			// }
		}
	}

	function get_sub_provinsi()
	{
		$prov = $this->input->post('kab_kota');
		$data = $this->Profile_model->get_sub_provinsi($prov)->result();
		echo json_encode($data);
	}

	function get_sub_kabkota()
	{
		$kec = $this->input->post('kecamatan');
		$data = $this->Profile_model->get_sub_kabkota($kec)->result();
		echo json_encode($data);
	}

	function get_sub_category()
	{
		$category_id = $this->input->post('prodi', TRUE);
		$data = $this->Profile_model->get_sub_category($category_id)->result();
		echo json_encode($data);
	}
}
