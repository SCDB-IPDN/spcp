<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
    }

    // public function index()
	// {
    //     $this->load->view('profile'); 
    // }
    public function index()
	{
        // var_dump($this->session->userdata('nip'));exit;
        if($this->session->userdata('nip') != NULL)
		{
			$this->load->view('profile');
		}else{
			redirect('login');
		}
	}
}