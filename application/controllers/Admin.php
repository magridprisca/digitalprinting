<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('auth_model');
        $this->load->model('user_model');
    }

    public function index()
    {
        // $datauser = $this->auth_model->get_datauser($this->session->userdata('username'));
        // $data = [
        //     'datauser' => $datauser,
        // ];
        // $this->load->view('header_admin');
        // $this->load->view('user-profile',$data);
        // $this->load->view('footer');
        $this->load->view('dashboard');
    }

    public function view_user(){
        $datauser = $this->user_model->getAll();
        $data = [
            'datauser' => $datauser,
        ];
        $this->load->view('list_user',$data);

    }
    
    public function add_user(){
        $this->load->view('tambah_user');
    }
    
    public function add_process(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		// $this->form_validation->set_rules('level', 'Level', 'required');
		// $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			// $this->session->set_flashdata('errors', $errors);
			// $this->session->set_flashdata('input', $this->input->post());
			// redirect('Admin/add_user');
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Admin/add_user').'";</script>';

		} else {
			$username = $this->input->post('username');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$level = $this->input->post('level');
			$pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
				'username' => $username,
				'nama_lengkap' => $nama,
				'email' => $email,
				'password' => $pass,
				'level'	=> $level
			];
			$insert = $this->user_model->create($data);
			if($insert){
                redirect('Admin/view_user');
				// echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.site_url('/Admin/view_user').'";</script>';
			}else{
                echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.site_url('/Admin/add_user').'";</script>';
            }
		}
    }

    function del_user($username){
        $insert = $this->user_model->delete($username);
        redirect('Admin/view_user');

    }

} 