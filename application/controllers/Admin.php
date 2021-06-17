<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('auth_model');
        $this->load->model('user_model');
        $this->load->model('barang_model');
        $this->load->model('stok_model');
        $this->load->model('karyawan_model');
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