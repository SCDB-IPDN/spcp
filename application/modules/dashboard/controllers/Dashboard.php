<?php
defined('BASEPATH') or exit('No direct script access allowed ');
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
	}

	public function index()
	{

		$data = $this->Dashboard_model->get_data();
		$x['data'] = $data;

		$asdaf = $this->Dashboard_model->get_asdaf()->result();
		$x['asdaf'] = $asdaf;

		$asdafreal = $this->Dashboard_model->get_asdafreal()->result();
		$x['asdafreal'] = $asdafreal;

		$jkreal = $this->Dashboard_model->get_jkreal()->result();
		$x['jkreal'] = $jkreal;

		$jk = $this->Dashboard_model->get_jk()->result();
		$x['jk'] = $jk;

		$agama = $this->Dashboard_model->get_agama()->result();
		$x['agama'] = $agama;

		$agamareal = $this->Dashboard_model->get_agamareal()->result();
		$x['agamareal'] = $agamareal;

		$prod = $this->Dashboard_model->get_prod()->result();
		$x['prod'] = $prod;

		$prodreal = $this->Dashboard_model->get_prodreal()->result();
		$x['prodreal'] = $prodreal;

		// var_dump($data);
		// exit;

		$this->load->view('dashboard', $x);
		$this->load->view('include/alert');
	}

	function get_praja()
	{
		// $data = $this->Praja_model->get_praja()->result();
		$data = $this->Dashboard_model->get_data()->result();
		$x['data'] = $data;

		$dataall = array();

		$no = 1;
		foreach ($data as $r) {
			$npp = $r->npp == NULL ? "<i><font>Tidak ada data</font></i>" : $r->npp;
			$nama = $r->nama == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nama;
			$jk = $r->jk == NULL ? "<i><font>Tidak ada data</font></i>" : $r->jk;
			$tingkat = $r->tingkat == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tingkat;
			$angkatan = $r->angkatan == NULL ? "<i><font>Tidak ada data</font></i>" : $r->angkatan;
			$status = $r->status == NULL ? "<i><font>Tidak ada data</font></i>" : $r->status;
			$penempatan = $r->penempatan == NULL ? "<i><font>Tidak ada data</font></i>" : $r->penempatan;
			$prodi = $r->prodi == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi;
			$prodi2 = $r->prodi2 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi2;
			$prodi3 = $r->prodi3 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi3;
			$prodi4 = $r->prodi4 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi4;
			$prodi5 = $r->prodi5 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi5;
			$prodi6 = $r->prodi6 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi6;
			$prodi7 = $r->prodi7 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi7;
			$prodi8 = $r->prodi8 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi8;
			$prodi9 = $r->prodi9 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi9;
			$prodi10 = $r->prodi10 == NULL ? "<i><font>Tidak ada data</font></i>" : $r->prodi10;

			$fakultas = $r->fakultas == NULL ? "<i><font>Tidak ada data</font></i>" : $r->fakultas;
			$tmpt_lahir = $r->tmpt_lahir == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tmpt_lahir;
			$tgl_lahir = $r->tgl_lahir == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tgl_lahir;
			$nisn = $r->nisn == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nisn;
			$npwp = $r->npwp == NULL ? "<i><font>Tidak ada data</font></i>" : $r->npwp;
			$no_spcp = $r->no_spcp == NULL ? "<i><font>Tidak ada data</font></i>" : $r->no_spcp;
			$nik_praja = $r->nik_praja == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nik_praja;
			$agama = $r->agama == NULL ? "<i><font>Tidak ada data</font></i>" : $r->agama;
			$alamat = $r->alamat == NULL ? "<i><font>Tidak ada data</font></i>" : $r->alamat;
			$rt = $r->rt == NULL ? "<i><font>Tidak ada data</font></i>" : $r->rt;
			$rw = $r->rw == NULL ? "<i><font>Tidak ada data</font></i>" : $r->rw;
			$provinsi = $r->provinsi == NULL ? "<i><font>Tidak ada data</font></i>" : $r->provinsi;
			$kab_kota = $r->kab_kota == NULL ? "<i><font>Tidak ada data</font></i>" : $r->kab_kota;
			$kelurahan = $r->kelurahan == NULL ? "<i><font>Tidak ada data</font></i>" : $r->kelurahan;
			$nama_dusun = $r->nama_dusun == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nama_dusun;
			$kecamatan = $r->kecamatan == NULL ? "<i><font>Tidak ada data</font></i>" : $r->kecamatan;
			$kode_pos = $r->kode_pos == NULL ? "<i><font>Tidak ada data</font></i>" : $r->kode_pos;
			$jenis_tinggal = $r->jenis_tinggal == NULL ? "<i><font>Tidak ada data</font></i>" : $r->jenis_tinggal;
			$tlp_pribadi = $r->tlp_pribadi == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tlp_pribadi;
			$tlp_rumah = $r->tlp_rumah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tlp_rumah;
			$email = $r->email == NULL ? "<i><font>Tidak ada data</font></i>" : $r->email;
			$kewarganegaraan = $r->kewarganegaraan == NULL ? "<i><font>Tidak ada data</font></i>" : $r->kewarganegaraan;
			$jenis_pendaftaran = $r->jenis_pendaftaran == NULL ? "<i><font>Tidak ada data</font></i>" : $r->jenis_pendaftaran;
			$tgl_masuk_kuliah = $r->tgl_masuk_kuliah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tgl_masuk_kuliah;
			$tahun_masuk_kuliah = $r->tahun_masuk_kuliah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tahun_masuk_kuliah;
			$pembiayaan = $r->pembiayaan == NULL ? "<i><font>Tidak ada data</font></i>" : $r->pembiayaan;
			$alat_transport = $r->alat_transport == NULL ? "<i><font>Tidak ada data</font></i>" : $r->alat_transport;
			$biaya_masuk = $r->biaya_masuk == NULL ? "<i><font>Tidak ada data</font></i>" : $r->biaya_masuk;
			$jalur_masuk = $r->jalur_masuk == NULL ? "<i><font>Tidak ada data</font></i>" : $r->jalur_masuk;
			$penerima_pks = $r->penerima_pks == NULL ? "<i><font>Tidak ada data</font></i>" : $r->penerima_pks;
			$no_pks = $r->no_pks == NULL ? "<i><font>Tidak ada data</font></i>" : $r->no_pks;
			$mulai_semester = $r->mulai_semester == NULL ? "<i><font>Tidak ada data</font></i>" : $r->mulai_semester;
			$asdaf = $r->asdaf == NULL ? "<i><font>Tidak ada data</font></i>" : $r->asdaf;

			$nik_ayah = $r->nik_ayah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nik_ayah;
			$nama_ayah = $r->nama_ayah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nama_ayah;
			$tgllahir_ayah = $r->tgllahir_ayah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tgllahir_ayah;
			$pendidikan_ayah = $r->pendidikan_ayah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->pendidikan_ayah;
			$pekerjaan_ayah = $r->pekerjaan_ayah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->pekerjaan_ayah;
			$penghasilan_ayah = $r->penghasilan_ayah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->penghasilan_ayah;
			$tlp_ayah = $r->tlp_ayah == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tlp_ayah;
			$nik_ibu = $r->nik_ibu == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nik_ibu;
			$nama_ibu = $r->nama_ibu == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nama_ibu;
			$tgllahir_ibu = $r->tgllahir_ibu == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tgllahir_ibu;
			$pendidikan_ibu = $r->pendidikan_ibu == NULL ? "<i><font>Tidak ada data</font></i>" : $r->pendidikan_ibu;
			$pekerjaan_ibu = $r->pekerjaan_ibu == NULL ? "<i><font>Tidak ada data</font></i>" : $r->pekerjaan_ibu;
			$penghasilan_ibu = $r->penghasilan_ibu == NULL ? "<i><font>Tidak ada data</font></i>" : $r->penghasilan_ibu;
			$tlp_ibu = $r->tlp_ibu == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tlp_ibu;

			$nik_wali = $r->nik_wali == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nik_wali;
			$nama_wali = $r->nama_wali == NULL ? "<i><font>Tidak ada data</font></i>" : $r->nama_wali;
			$tgllahir_wali = $r->tgllahir_wali == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tgllahir_wali;
			$pendidikan_wali = $r->pendidikan_wali == NULL ? "<i><font>Tidak ada data</font></i>" : $r->pendidikan_wali;
			$pekerjaan_wali = $r->pekerjaan_wali == NULL ? "<i><font>Tidak ada data</font></i>" : $r->pekerjaan_wali;
			$penghasilan_wali = $r->penghasilan_wali == NULL ? "<i><font>Tidak ada data</font></i>" : $r->penghasilan_wali;
			$tlp_wali = $r->tlp_wali == NULL ? "<i><font>Tidak ada data</font></i>" : $r->tlp_wali;
			$update_date = $r->update_date == NULL ? "<i><font>Tidak ada data</font></i>" : $r->update_date;

			$dataall[] = array(
				$no++,

				$npp,
				$nama,
				$jk,
				$tingkat,
				$angkatan,
				$status,
				$penempatan,
				$prodi,
				$prodi2,
				$prodi3,
				$prodi4,
				$prodi5,
				$prodi6,
				$prodi7,
				$prodi8,
				$prodi9,
				$prodi10,
				$asdaf,
				$fakultas,
				$tmpt_lahir,
				$tgl_lahir,
				$nisn,
				$npwp,
				$no_spcp,
				$nik_praja,
				$agama,
				$alamat,
				$rt,
				$rw,
				$provinsi,
				$kab_kota,
				$kelurahan,
				$nama_dusun,
				$kecamatan,
				$kode_pos,
				$jenis_tinggal,
				$tlp_pribadi,
				$tlp_rumah,
				$email,
				$kewarganegaraan,
				$jenis_pendaftaran,
				$tgl_masuk_kuliah,
				$tahun_masuk_kuliah,
				$pembiayaan,
				$alat_transport,
				$biaya_masuk,
				$jalur_masuk,
				$penerima_pks,
				$no_pks,
				$mulai_semester,

				$nik_ayah,
				$nama_ayah,
				$tgllahir_ayah,
				$pendidikan_ayah,
				$pekerjaan_ayah,
				$penghasilan_ayah,
				$tlp_ayah,
				$nik_ibu,
				$nama_ibu,
				$tgllahir_ibu,
				$pendidikan_ibu,
				$pekerjaan_ibu,
				$penghasilan_ibu,
				$tlp_ibu,

				$nik_wali,
				$nama_wali,
				$tgllahir_wali,
				$pendidikan_wali,
				$pekerjaan_wali,
				$penghasilan_wali,
				$tlp_wali,

				$update_date

			);
		}
		echo json_encode($dataall);
	}


	//dashboard

	public function dash()
	{
		if ($this->session->userdata('spcp') != NULL) {

			$data = $this->Profile_model->get_table();
			$x['data'] = $data[0];


			$this->load->view('profile/dashboard', $x);
			$this->load->view('include/alert');
		} else {
			redirect('login');
		}
	}
}
