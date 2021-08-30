<?php
class Login_model extends CI_Model
{

    function login_user($spcp, $password)
    {

        $this->db->select('*');
        $this->db->from('tbl_users_spcp');
        $this->db->join('data_capra', 'tbl_users_spcp.spcp = data_capra.no_spcp');
        // $this->db->get_where('tbl_users_spcp', array('spcp' => $spcp));

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            // var_dump($data_user);
            // exit;


            $this->db->where("spcp='$spcp'");
            $this->db->where("password='$password'");

            $result = $this->db->get('tbl_users_spcp')->result();
            if (!empty($result)) {
                $this->session->set_userdata('spcp', $spcp);
                $this->session->set_userdata('nama', $data_user->nama);
                $this->session->set_userdata('nisn', $data_user->nisn);
                $this->session->set_userdata('npwp', $data_user->npwp);
                $this->session->set_userdata('jk', $data_user->jk);
                $this->session->set_userdata('nik_praja', $data_user->nik_praja);
                $this->session->set_userdata('tmpt_lahir', $data_user->tmpt_lahir);
                $this->session->set_userdata('tgl_lahir', $data_user->tgl_lahir);
                $this->session->set_userdata('tlp_rumah', $data_user->tlp_rumah);
                $this->session->set_userdata('tlp_pribadi', $data_user->tlp_pribadi);
                $this->session->set_userdata('alamat', $data_user->alamat);
                $this->session->set_userdata('rt', $data_user->rt);
                $this->session->set_userdata('rw', $data_user->rw);
                $this->session->set_userdata('nama_dusun', $data_user->nama_dusun);
                $this->session->set_userdata('kelurahan', $data_user->kelurahan);
                $this->session->set_userdata('kode_pos', $data_user->kode_pos);
                $this->session->set_userdata('tahun_masuk_kuliah', $data_user->tahun_masuk_kuliah);
                $this->session->set_userdata('tgl_masuk_kuliah', $data_user->tgl_masuk_kuliah);
                $this->session->set_userdata('nik_ayah', $data_user->nik_ayah);
                $this->session->set_userdata('nama_ayah', $data_user->nama_ayah);
                $this->session->set_userdata('tgl_lahir_ayah', $data_user->tgllahir_ayah);
                $this->session->set_userdata('tlp_ayah', $data_user->tlp_ayah);
                $this->session->set_userdata('nik_ibu', $data_user->nik_ibu);
                $this->session->set_userdata('nama_ibu', $data_user->nama_ibu);
                $this->session->set_userdata('tgl_lahir_ibu', $data_user->tgllahir_ibu);
                $this->session->set_userdata('tlp_ibu', $data_user->tlp_ibu);
                $this->session->set_userdata('nik_wali', $data_user->nik_wali);
                $this->session->set_userdata('nama_wali', $data_user->nama_wali);
                $this->session->set_userdata('tgl_lahir_wali', $data_user->tgllahir_wali);
                $this->session->set_userdata('tlp_wali', $data_user->tlp_wali);

                $this->session->set_userdata('is_login', TRUE);

                $this->session->set_flashdata('login', 'Anda Telah Login');
                return TRUE;
            } else {
                $this->session->set_flashdata('login', 'PASSWORD SALAH !!!');
                return FALSE;
            }
        } else {
            $this->session->set_flashdata('login', 'NOMOR SPCP SALAH !!!');
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('profile');
        }
    }
}
