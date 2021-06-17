<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('barang_model');
        
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


} 