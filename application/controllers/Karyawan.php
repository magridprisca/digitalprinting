<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('karyawan_model');
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