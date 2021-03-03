<?php
defined('BASEPATH') OR exit('No direct script access allowed ');

class login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //load model
        $this->load->model('login_model');
    }

    public function index(){
		$this->load->view('login');
	}
 
	public function proses(){
		$spcp = $this->input->post('spcp', TRUE);
        $password = MD5($this->input->post('password', TRUE));
		
		if($this->user_model->login_user($spcp,$password)){
			redirect('profile');
		}else{
			$this->session->set_flashdata('error','SPCP ATAU PASSWORD SALAH !!!');
			redirect('login');
		}
    }
    
    public function logout(){
		$this->session->unset_userdata('nip');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('image_url');
		$this->session->unset_userdata('dosen');
		redirect('home');
	}
}