<?php
class Profile_model extends CI_Model
{

	function link_panduan(){
		return $this->db->select('link')->from('tbl_config')->where('code', 'PD-01')->get()->result();
	}
	
    public function get_data()
    {
        $no_spcp = $this->session->userdata('spcp');
        $kecamatan = $this->db->query("SELECT kecamatan from data_capra where no_spcp ='$no_spcp' ")->result();
        $prodi = $this->db->query("SELECT prodi from data_capra where no_spcp ='$no_spcp' ")->result();

		
        if ($kecamatan[0]->kecamatan != NULL) {
            $spcp = $this->db->query("SELECT * from data_capra join tbl_users_spcp ON data_capra.no_spcp = tbl_users_spcp.spcp join wilayah ON data_capra.kecamatan = wilayah.id_kecamatan where no_spcp ='$no_spcp' ")->result();
        }else{
			$spcp = $this->db->query("SELECT * from data_capra join tbl_users_spcp ON data_capra.no_spcp = tbl_users_spcp.spcp  where no_spcp ='$no_spcp' ")->result();
		}


        return $spcp;
    }

    public function prod()
    {
        $no_spcp = $this->session->userdata('spcp');
        $prodi = $this->db->query("SELECT prodi from data_capra where no_spcp ='$no_spcp' ")->result();
        if ($prodi[0]->prodi != NULL) {
            $spcp = $this->db->query("SELECT * from data_capra join tbl_users_spcp ON data_capra.no_spcp = tbl_users_spcp.spcp join program_studi ON data_capra.prodi = program_studi.id_prodi where no_spcp ='$no_spcp' ")->result();
        } else {
            $spcp = $this->db->query("SELECT * from data_capra join tbl_users_spcp ON data_capra.no_spcp = tbl_users_spcp.spcp where no_spcp ='$no_spcp' ")->result();
        }

        return $spcp;
    }


    public function get_provinsi()
    {
        $prov = $this->db->query("SELECT provinsi , count(provinsi) as jumlah from praja_baru group by provinsi");
        return $prov;
    }

    public function get_fakultas()
    {
        return $this->db->query("SELECT * FROM program_studi where kode_fakultas ='FPP' or kode_fakultas ='FMP' or kode_fakultas ='FPM' group BY kode_fakultas");
    }

    public function get_prodi()
    {
        return $this->db->query("SELECT nama_program_studi,id_prodi FROM program_studi order by nama_program_studi ASC");
    }

    public function get_prodisepuluh()
    {
        return $this->db->query("SELECT nama_program_studi,id_prodi FROM program_studi where nama_program_studi like 'D4%' order by nama_program_studi ASC");
    }

    public function get_will()
    {
        return  $this->db->query("SELECT * FROM `wilayah` GROUP BY id_provinsi ");
    }
    public function get_namakecamatan()
    {
        return  $this->db->query("SELECT nama_kecamatan FROM `wilayah` ");
    }

    public function get_kampus()
    {
        return  $this->db->query("SELECT nama_satker FROM `tbl_satker` ");
    }


    public function agama()
    {
        return $this->db->query("SELECT * FROM agama ");
    }

    public function jenistinggal()
    {
        return $this->db->query("SELECT * FROM jenis_tinggal ");
    }

    public function prodi()
    {
        return $this->db->query("SELECT * FROM program_studi ");
    }

    public function kewarganegaraan()
    {
        return $this->db->query("SELECT * FROM negara ");
    }

    public function jenispendaftaran()
    {
        return $this->db->query("SELECT * FROM jenis_pendaftaran ");
    }

    public function pembiayaan()
    {
        return $this->db->query("SELECT * FROM jenis_pembiayaan ");
    }

    public function jalurmasuk()
    {
        return $this->db->query("SELECT * FROM jalur_masuk ");
    }

    public function pendidikan()
    {
        return $this->db->query("SELECT * FROM jenjang_pendidikan ");
    }


    public function pekerjaan()
    {
        return $this->db->query("SELECT * FROM pekerjaan ");
    }

    public function penghasilan()
    {
        return $this->db->query("SELECT * FROM penghasilan ");
    }

    public function alattransportasi()
    {
        return $this->db->query("SELECT * FROM alat_transportasi ");
    }

    public function mulaisemester()
    {
        return $this->db->query("SELECT * FROM semester ");
    }

    public function wilayah()
    {
        return $this->db->query("SELECT * FROM tbl_satker ");
    }

    public function editpraja($editnya)
    {

        $npp =  $editnya['npp'];
        $no_spcp =  $editnya['no_spcp'];
        $nama =  $editnya['nama'];
        $jk =  $editnya['jk'];
        $nisn =  $editnya['nisn'];
        $npwp =  $editnya['npwp'];
        $nik_praja =  $editnya['nik_praja'];
        $tmpt_lahir =  $editnya['tmpt_lahir'];
        $tgl_lahir =  $editnya['tgl_lahir'];
        $alamat =  $editnya['alamat'];
        $rt =  $editnya['rt'];
        $rw =  $editnya['rw'];
        $nama_dusun =  $editnya['nama_dusun'];
        $kelurahan =  $editnya['kelurahan'];
        $kode_pos =  $editnya['kode_pos'];
        $kab_kota =  $editnya['kab_kota'];
        $provinsi =  $editnya['provinsi'];
        $agama =  $editnya['agama'];
        $kecamatan =  $editnya['kecamatan'];
        $tlp_pribadi =  $editnya['tlp_pribadi'];
        $tlp_rumah =  $editnya['tlp_rumah'];
        $email =  $editnya['email'];
        $prodi =  $editnya['prodi'];
        $penerima_pks =  $editnya['penerima_pks'];
        $no_pks =  $editnya['no_pks'];
        $tgl_masuk_kuliah =  $editnya['tgl_masuk_kuliah'];
        $tahun_masuk_kuliah =  $editnya['tahun_masuk_kuliah'];
        $status =  $editnya['status'];
        $tingkat =  $editnya['tingkat'];
        $angkatan =  $editnya['angkatan'];
        $fakultas =  $editnya['fakultas'];
        $biaya_masuk =  $editnya['biaya_masuk'];
        $mulai_semester =  $editnya['mulai_semester'];
        $jenis_tinggal =  $editnya['jenis_tinggal'];
        $alat_transport =  $editnya['alat_transport'];
        $kewarganegaraan =  $editnya['kewarganegaraan'];
        $pembiayaan =  $editnya['pembiayaan'];
        $jalur_masuk =  $editnya['jalur_masuk'];
        $nik_ayah  =  $editnya['nik_ayah'];
        $nama_ayah  =  $editnya['nama_ayah'];
        $tgllahir_ayah  =  $editnya['tgllahir_ayah'];
        $pendidikan_ayah  =  $editnya['pendidikan_ayah'];
        $pekerjaan_ayah  =  $editnya['pekerjaan_ayah'];
        $penghasilan_ayah  =  $editnya['penghasilan_ayah'];
        $tlp_ayah  =  $editnya['tlp_ayah'];
        $nik_ibu  =  $editnya['nik_ibu'];
        $nama_ibu  =  $editnya['nama_ibu'];
        $tgllahir_ibu =  $editnya['tgllahir_ibu'];
        $pendidikan_ibu  =  $editnya['pendidikan_ibu'];
        $pekerjaan_ibu =  $editnya['pekerjaan_ibu'];
        $penghasilan_ibu  =  $editnya['penghasilan_ibu'];
        $tlp_ibu  =  $editnya['tlp_ibu'];
        $nik_wali =  $editnya['nik_wali'];
        $nama_wali  =  $editnya['nama_wali'];
        $tgllahir_wali  =  $editnya['tgllahir_wali'];
        $tlp_wali =  $editnya['tlp_wali'];
        $pendidikan_wali  =  $editnya['pendidikan_wali'];
        $pekerjaan_wali =  $editnya['pekerjaan_wali'];
        $penghasilan_wali  =  $editnya['penghasilan_wali'];
        $jenis_pendaftaran  =  $editnya['jenis_pendaftaran'];
        $penempatan  =  $editnya['penempatan'];
        $asdaf  =  $editnya['asdaf'];
        $update_date = $editnya['update_date'];
        $prodi2  =  $editnya['prodi2'];
        $prodi3  =  $editnya['prodi3'];
        $prodi4  =  $editnya['prodi4'];
        $prodi5  =  $editnya['prodi5'];
        $prodi6  =  $editnya['prodi6'];
        $prodi7  =  $editnya['prodi7'];
        $prodi8  =  $editnya['prodi8'];
        $prodi9  =  $editnya['prodi9'];
        $prodi10  =  $editnya['prodi10'];


        $hasil = $this->db->query("UPDATE data_capra SET
            npp = '$npp',
			no_spcp = '$no_spcp',
			nama = '$nama',
            jk = '$jk',
			nisn = '$nisn',
			npwp = '$npwp',
			nik_praja = '$nik_praja',
			tmpt_lahir = '$tmpt_lahir',
			tgl_lahir = '$tgl_lahir',
			alamat = '$alamat',
			rt = '$rt',
			rw = '$rw',
			nama_dusun = '$nama_dusun',
			kelurahan = '$kelurahan',
			kode_pos = '$kode_pos',
            kab_kota =  '$kab_kota',
            provinsi =  '$provinsi',
            agama =  '$agama',
            kecamatan =  '$kecamatan',
			tlp_pribadi = '$tlp_pribadi',
			tlp_rumah = '$tlp_rumah',
			email = '$email',
            prodi =  '$prodi',
			penerima_pks = '$penerima_pks',
			no_pks = '$no_pks',
			tgl_masuk_kuliah = '$tgl_masuk_kuliah',
			tahun_masuk_kuliah = '$tahun_masuk_kuliah',
			status = '$status',
			tingkat = '$tingkat',
			angkatan = '$angkatan',
            fakultas =  '$fakultas',
			biaya_masuk = '$biaya_masuk',
            mulai_semester =  '$mulai_semester',
            jenis_tinggal =  '$jenis_tinggal',
            alat_transport =  '$alat_transport',
            kewarganegaraan =  '$kewarganegaraan',
            pembiayaan =  '$pembiayaan',
            jalur_masuk =  '$jalur_masuk',
			nik_ayah = '$nik_ayah',
			nama_ayah = '$nama_ayah',
			tgllahir_ayah = '$tgllahir_ayah',
            pendidikan_ayah  =  '$pendidikan_ayah',
            pekerjaan_ayah  =  '$pekerjaan_ayah',
            penghasilan_ayah  =  '$penghasilan_ayah',
			tlp_ayah = '$tlp_ayah',
			nik_ibu = '$nik_ibu',
			nama_ibu = '$nama_ibu',
			tgllahir_ibu = '$tgllahir_ibu',
            pendidikan_ibu  =  '$pendidikan_ibu',
            pekerjaan_ibu =  '$pekerjaan_ibu',
            penghasilan_ibu  =  '$penghasilan_ibu',
			tlp_ibu = '$tlp_ibu',
			nik_wali = '$nik_wali',
			nama_wali = '$nama_wali',
			tgllahir_wali = '$tgllahir_wali',
			tlp_wali = '$tlp_wali',
            pendidikan_wali  =  '$pendidikan_wali',
            pekerjaan_wali =  '$pekerjaan_wali',
            penghasilan_wali  =  '$penghasilan_wali',
            jenis_pendaftaran  =  '$jenis_pendaftaran',
            penempatan = '$penempatan',
            update_date = '$update_date',
            asdaf = '$asdaf',
			prodi2 = '$prodi2',
            prodi3 = '$prodi3',
            prodi4 = '$prodi4',
            prodi5 = '$prodi5',
            prodi6 = '$prodi6',
            prodi7 = '$prodi7',
            prodi8 = '$prodi8',
            prodi9 = '$prodi9',
            prodi10 = '$prodi10'
         ");

        // print("<pre>" . print_r($editnya, true) . "<pre>");
        // var_dump($hasil);
        // exit;
        return $hasil;
    }

    function get_sub_provinsi($prov)
    {

        $this->db->select('*');
        $this->db->from('wilayah');
        $this->db->where(array('nama_provinsi' => $prov));
        $this->db->group_by('nama_kabkota');
        $query = $this->db->get();

        return $query;
    }

    function get_sub_kabkota($kab)
    {

        $this->db->select('*');
        $this->db->from('wilayah');
        $this->db->where(array('nama_kabkota' => $kab));
        $this->db->group_by('nama_kecamatan');
        $query = $this->db->get();

        // $query = $this->db->query("SELECT * FROM wilayah WHERE nama_kabkota = '$kab'");

        return $query;
    }

    function get_sub_category($category_id)
    {
        $query = $this->db->get_where('program_studi', array('nama_fakultas' => $category_id));

        return $query;
    }
}
