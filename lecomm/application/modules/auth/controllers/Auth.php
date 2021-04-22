<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');

		// $this->load->library('module/library');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('admin');
		}
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['head'] = 'Login';

			// modules::run('templates/Templates');
			// $this->load->module('templates');
			// $this->templates->view('header_login', $data);
			$this->load->view('Templates/auth_header', $data);
			$this->load->view('login');
			$this->load->view('Templates/auth_footer');
		} else {
			$this->_login();
		}
	}
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$admin = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($admin) {
			// cek password
			if (password_verify($password, $admin['password'])) {
				$data = [
					'email' => $admin['email'],
				];
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('auth');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kamu telah logout!</div>');
		redirect('auth');
	}
	public function reg()
	{
		if ($this->session->userdata('email')) {
			redirect('admin');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'email sudah digunakan!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['head'] = 'Register';
			$this->load->view('Templates/auth_header', $data);
			$this->load->view('register');
			$this->load->view('Templates/auth_footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'date_created' => time()

			];
			$this->db->insert('user', $data);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Akun sudah terdaftar!. Silahkan Login
    </div>');
			redirect('auth');
		}
	}
}
