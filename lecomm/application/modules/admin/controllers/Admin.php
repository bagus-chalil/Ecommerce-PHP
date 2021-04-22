<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MX_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->library('session');
    }
	public function index()
	{
		$data['title'] = "Halaman Admin";
		// modules::run('templates/Templates');
		// $this->load->view('header', $data);
		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/sidebar');
		$this->load->view('Templates/topbar');
		$this->load->view('Templates/breadcumb');
		$this->load->view('Templates/footer');
		$this->load->view('Admin/coba1');
	}
}
