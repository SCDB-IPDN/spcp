<?php
class login_model extends CI_Model {

    function login_user($spcp,$password){
        $query = $this->db->get_where('tbl_loginspcp',array('spcp'=>$spcp));
        
        if($query->num_rows() > 0){
            $data_user = $query->row();
            $this->db->where("spcp='$spcp'");
            $this->db->where("password='$password'");
            
            $result = $this->db->get('tbl_users')->result();
            if(!empty($result)){
                $this->session->set_userdata('spcp',$spcp);
                $this->session->set_userdata('nama',$data_user->nama_user);
                $this->session->set_userdata('image_url',$data_user->image_url);
                $this->session->set_userdata('is_login',TRUE);

                return TRUE;
            } else {
                return FALSE;
            }
        }else{
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