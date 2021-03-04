<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
	{
        $x['link_video'] = $this->home_model->link_video()[0];
        $this->load->view('homee', $x); 
	}
}