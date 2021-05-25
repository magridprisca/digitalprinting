<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

	public function index()
	{
		$nama=$this->session->userdata("nama");
		if($nama==NULL){
			$this->load->view('header');
			$this->load->view('login');
		}else{
			$this->load->view('header');
			$this->load->view('login');
		}
		$this->load->view('footer');
	}

	public function regis()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function proses_login()
    {

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		// $this->form_validation->set_rules('check', 'Check', '');
		
		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect(base_url('/index.php/login')); // LOGIN
		
		} else {

			$username = htmlspecialchars($this->input->post('username'));
			$pass = htmlspecialchars($this->input->post('password'));

			// CEK KE DATABASE BERDASARKAN EMAIL
			$cek_login = $this->auth_model->cek_login($username); 
				
			if($cek_login == FALSE)
			{
				echo '<script>alert("Username yang Anda masukan salah.");window.location.href="'.base_url('/index.php/login').'";</script>';
			
			} else {
			
				if(password_verify($pass, $cek_login->password)){
					// if the username and password is a match
					$this->session->set_userdata('username', $cek_login->username);
					$this->session->set_userdata('nama', $cek_login->nama_lengkap);
					$this->session->set_userdata('level', $cek_login->level);
					
					redirect('/Admin');
						
				} else {
					echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('/index.php/login').'";</script>';
				}
			}
		}
    }
	public function cek_login($username)
	{
		$hasil = $this->db->where('username', $username)->limit(1)->get('tb_user');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	} 

    public function proses_register()
    {

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
		
		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('login/regis');
		} else {
			$username = $this->input->post('username');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
				'username' => $username,
				'nama_lengkap' => $nama,
				'email' => $email,
				'password' => $pass,
				'level'	=> 'user'
			];
			$insert = $this->auth_model->register("tb_user", $data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('index.php/login').'";</script>';
			}
		}
    }

    public function logout()
    {
        $this->session->sess_destroy();
		echo '<script>alert("Sukses! Anda berhasil logout.");window.location.href="'.base_url('index.php/login').'";</script>';
    }
	
}
