<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        
        $this->load->model('stok_model');

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

   

} 