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

} 