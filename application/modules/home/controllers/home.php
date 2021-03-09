<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
	{
        $x['link_video'] = $this->Home_model->link_video()[0];
        $this->load->view('homee', $x); 
	}
}