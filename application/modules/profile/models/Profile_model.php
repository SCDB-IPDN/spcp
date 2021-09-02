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

    public function editpraja($editnya){
        $no_spcp =  $editnya['no_spcp'];
		return $this->db->where('no_spcp', $no_spcp)->update('data_capra', $editnya);
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
