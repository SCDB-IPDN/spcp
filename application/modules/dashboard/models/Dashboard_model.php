<?php
class Dashboard_model extends CI_Model
{

    public function get_data()
    {

        $result = $this->db->query("SELECT id,no_spcp, nama,CASE WHEN jk= 'P' THEN 'Perempuan'WHEN jk= 'L' THEN 'Laki-Laki' ELSE 'Belum Ada ' END AS jk, 
		nisn,npwp,npp,nik_praja,tmpt_lahir,tgl_lahir,alamat,rt,rw,nama_dusun,kelurahan,kode_pos,provinsi,tlp_pribadi,tlp_rumah,
		email,penerima_pks,no_pks,tgl_masuk_kuliah,tahun_masuk_kuliah,status,tingkat,angkatan,mulai_semester,biaya_masuk,
		nik_ayah , nama_ayah , tgllahir_ayah ,tlp_ayah ,nik_ibu ,nama_ibu ,tgllahir_ibu,tlp_ibu , nik_wali, nama_wali ,
		tgllahir_wali ,tlp_wali,penempatan,fakultas,kab_kota,asdaf,update_date,
	 	(SELECT nama_jenis_daftar FROM jenis_pendaftaran WHERE jenis_pendaftaran = id_jenis_daftar) as jenis_pendaftaran,
	 	(SELECT nama_jalur_masuk  FROM jalur_masuk WHERE jalur_masuk = id_jalur_masuk) as jalur_masuk ,
	 	(SELECT nama_program_studi FROM program_studi WHERE prodi = id_prodi) as prodi,
         (SELECT nama_program_studi FROM program_studi WHERE prodi2 = id_prodi) as prodi2,
         (SELECT nama_program_studi FROM program_studi WHERE prodi3 = id_prodi) as prodi3,
         (SELECT nama_program_studi FROM program_studi WHERE prodi4 = id_prodi) as prodi4,
         (SELECT nama_program_studi FROM program_studi WHERE prodi5 = id_prodi) as prodi5,
         (SELECT nama_program_studi FROM program_studi WHERE prodi6 = id_prodi) as prodi6,
         (SELECT nama_program_studi FROM program_studi WHERE prodi7 = id_prodi) as prodi7,
         (SELECT nama_program_studi FROM program_studi WHERE prodi8 = id_prodi) as prodi8,
         (SELECT nama_program_studi FROM program_studi WHERE prodi9 = id_prodi) as prodi9,
         (SELECT nama_program_studi FROM program_studi WHERE prodi10 = id_prodi) as prodi10,

	 	(SELECT nama_negara FROM negara WHERE kewarganegaraan = id_negara) as kewarganegaraan,
	 	(SELECT nama_jenis_tinggal FROM jenis_tinggal WHERE jenis_tinggal = id_jenis_tinggal) as jenis_tinggal,
	 	(SELECT nama_alat_transportasi FROM alat_transportasi WHERE alat_transport = id_alat_transportasi) as alat_transport,
	 	(SELECT nama_jenjang_didik FROM jenjang_pendidikan WHERE pendidikan_ayah = id_jenjang_didik) as pendidikan_ayah,
	 	(SELECT nama_penghasilan FROM penghasilan  WHERE penghasilan_ayah = id_penghasilan) as penghasilan_ayah,
		(SELECT nama_pekerjaan FROM pekerjaan  WHERE pekerjaan_ayah = id_pekerjaan) as pekerjaan_ayah,
 		(SELECT nama_jenjang_didik FROM jenjang_pendidikan WHERE pendidikan_ibu= id_jenjang_didik) as pendidikan_ibu,
	 	(SELECT nama_penghasilan FROM penghasilan  WHERE penghasilan_ibu = id_penghasilan) as penghasilan_ibu,
 		(SELECT nama_pekerjaan FROM pekerjaan  WHERE pekerjaan_ibu = id_pekerjaan) as pekerjaan_ibu,
	 	(SELECT nama_jenjang_didik FROM jenjang_pendidikan WHERE pendidikan_wali = id_jenjang_didik) as pendidikan_wali,
	 	(SELECT nama_penghasilan FROM penghasilan  WHERE penghasilan_wali = id_penghasilan) as penghasilan_wali,
	 	(SELECT nama_pekerjaan FROM pekerjaan  WHERE pekerjaan_wali = id_pekerjaan) as pekerjaan_wali,
	 	(SELECT nama_agama FROM agama  WHERE agama = id_agama) as agama,
	 	(SELECT nama_semester FROM semester WHERE mulai_semester = id_semester) as mulai_semester,
	 	(SELECT nama_pembiayaan FROM jenis_pembiayaan  WHERE pembiayaan = id_pembiayaan) as pembiayaan,
	 	(SELECT nama_kecamatan FROM wilayah WHERE kecamatan = id_kecamatan) as kecamatan FROM data_capra");

        // 	return $result;

        return $result;
    }

    public function get_asdaf()
    {
        $prov = $this->db->query("SELECT asdaf , count(asdaf) as jumlah from data_capra where update_date != '' group by asdaf");
        return $prov;
    }

    public function get_asdafreal()
    {
        $prov = $this->db->query("SELECT asdaf , count(asdaf) as jumlah from data_capra group by asdaf");
        return $prov;
    }

    public function get_jk()
    {
        $prov = $this->db->query("SELECT jk , count(jk) as jumlah  from data_capra where update_date != '' group by jk");
        return $prov;
    }

    public function get_jkreal()
    {
        $prov = $this->db->query("SELECT jk , count(jk) as jumlah from data_capra group by jk");
        return $prov;
    }

    public function get_agama()
    {
        $prov = $this->db->query("SELECT nama_agama as agama , count(agama) as jumlah from data_capra join agama on data_capra.agama = agama.id_agama  where data_capra.update_date != '' group by agama");
        return $prov;
    }

    public function get_agamareal()
    {
        $prov = $this->db->query("SELECT nama_agama as agama , count(agama) as jumlah from data_capra join agama on data_capra.agama = agama.id_agama  group by agama");
        return $prov;
    }

    public function get_prod()
    {
        $prov = $this->db->query("SELECT program_studi.nama_program_studi as nama, COUNT(data_capra.prodi) as jumlah FROM `data_capra` join program_studi on data_capra.prodi = program_studi.id_prodi where data_capra.update_date != '' GROUP BY prodi");
        return $prov;
    }

    public function get_prodreal()
    {
        $prov = $this->db->query("SELECT program_studi.nama_program_studi as nama, COUNT(data_capra.prodi) as jumlah FROM `data_capra` join program_studi on data_capra.prodi = program_studi.id_prodi GROUP BY prodi");
        return $prov;
    }
}
