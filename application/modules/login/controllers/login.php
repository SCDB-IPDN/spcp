<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
// class login extends CI_Controller {

//     public function __construct()
//     {
//         parent::__construct();
//     }

//     public function index()
// 	{
//         $this->load->view('login'); 
// 	}
// }
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('user_model');
    }

    public function index()
	{
		// if($this->session->userdata('nip') == NULL)
		// {
			$this->load->view('login');
		// }else{
			// redirect('login');
		// }
		// di halaman login, gk usah cek apa2
		// jangan lupa cek view juga, lempar apa
	}
 
	public function proses()
	{
		$nip = $this->input->post('nip', TRUE);
        $password = MD5($this->input->post('password', TRUE));
		
		if($this->user_model->login_user($nip,$password))
		{
			redirect('profile');
		}
		else
		{
			$this->session->set_flashdata('error','NIP ATAU PASSWORD SALAH !!!');
			redirect('login');
		}
    }
    
    public function logout()
	{
		$this->session->unset_userdata('nip');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('image_url');
		$this->session->unset_userdata('dosen');
		redirect('home');
	}
}