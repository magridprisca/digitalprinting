<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('auth_model');
        $this->load->model('user_model');
        $this->load->model('barang_model');
        $this->load->model('stok_model');
        $this->load->model('karyawan_model');
        $this->load->model('pelanggan_model');
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

    public function view_pelanggan(){
        $datapelanggan = $this->pelanggan_model->getAll();
        $data = [
            'datapelanggan' => $datapelanggan,
        ];
        $this->load->view('list_pelanggan',$data);

    }
    
    public function add_pelanggan(){
        $this->load->view('tambah_pelanggan');
    }
    
    public function add_process(){
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');
		$this->form_validation->set_rules('telp_customer', 'Telp Customer', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required|trim');
		// $this->form_validation->set_rules('level', 'Level', 'required');
		// $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			// $this->session->set_flashdata('errors', $errors);
			// $this->session->set_flashdata('input', $this->input->post());
			// redirect('Admin/add_user');
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Pelanggan/add_pelanggan').'";</script>';

		} else {
			$nama_customer = $this->input->post('nama_customer');
			$telp_customer = $this->input->post('telp_customer');
			$keterangan = $this->input->post('keterangan');
			// $password = $this->input->post('password');
			// $level = $this->input->post('level');
			// $pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
				'nama_customer' => $nama_customer,
				'telp_customer' => $telp_customer,
				'keterangan' => $keterangan
			];
			$insert = $this->pelanggan_model->create($data);
			if($insert){
                // redirect('Admin/view_user');
				echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Pelanggan/view_pelanggan').'";</script>';
			}else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Pelanggan/add_pelanggan').'";</script>';
            }
		}
    }

    function del_pelanggan($id_customer){
        $insert = $this->pelanggan_model->delete($id_customer);
        redirect('Pelanggan/view_pelanggan');
    }

    public function update_pelanggan($id_customer){
        $datapelanggan = $this->pelanggan_model->findDetail($id_customer);
        $data = [
            'datapelanggan' => $datapelanggan,
        ];
        $this->load->view('edit_pelanggan',$data);
    }
    
    public function update_process(){
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');
		$this->form_validation->set_rules('telp_customer', 'Telp Customer', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$id_customer = $this->input->post('id_customer');
            if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Periksa kembali inputan anda!");window.location.href="'.site_url('/Pelanggan/update_pelanggan/'.$id_customer).'";</script>';

		} else {
			$nama_customer = $this->input->post('nama_customer');
			$telp_customer = $this->input->post('telp_customer');
			$keterangan = $this->input->post('keterangan');
			$data = [
				'nama_customer' => $nama_customer,
				'telp_customer' => $telp_customer,
				'keterangan' => $keterangan
			];
			$insert = $this->pelanggan_model->update($id_customer,$data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Pelanggan/view_pelanggan').'";</script>';
			}else{
                echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Pelanggan/update_pelanggan/'.$id_customer).'";</script>';
            }
		}
    }

    public function add_barang(){
        
        $this->load->view('tambah_barang');

    }

    public function view_barang(){
        $databarang = $this->barang_model->getAll();
        $data = [
            'databarang' => $databarang,
        ];
        $this->load->view('list_barang',$data);

    }

    public function add_stok(){
        
        $this->load->view('tambah_stok');

    }

    public function view_stok(){
        $datastok = $this->stok_model->getAll();
        $data = [
            'datastok' => $datastok,
        ];
        $this->load->view('list_stok',$data);

    }

    public function add_karyawan(){
        
        $this->load->view('tambah_karyawan');

    }

    public function view_karyawan(){
        $datakaryawan = $this->karyawan_model->getAll();
        $data = [
            'datakaryawan' => $datakaryawan,
        ];
        $this->load->view('list_karyawan',$data);

    }

} 