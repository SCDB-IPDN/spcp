<?php
class Login_model extends CI_Model {

    function login_user($spcp,$password){
        $query = $this->db->get_where('tbl_users_spcp',array('spcp'=>$spcp));
        
        if($query->num_rows() > 0){
            $data_user = $query->row();
            
            $this->db->where("spcp='$spcp'");
            $this->db->where("password='$password'");

            $result = $this->db->get('tbl_users_spcp')->result();
            if(!empty($result)){
                $this->session->set_userdata('spcp',$spcp);
                $this->session->set_userdata('nama',$data_user->nama);
                $this->session->set_userdata('is_login',TRUE);

                $this->session->set_flashdata('login','Anda Telah Login');
                return TRUE;
            } else {
                $this->session->set_flashdata('login','PASSWORD SALAH !!!');
                return FALSE;
            }
        }else{
            $this->session->set_flashdata('login','NOMOR SPCP SALAH !!!');
            return FALSE;
        }
    }
    
    function cek_login(){
        if(empty($this->session->userdata('is_login')))
        {
			redirect('profile');
		}
    }
}