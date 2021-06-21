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

    public function add_process(){
        $this->form_validation->set_rules('nama_stok', 'Nama Stok', 'required');
        $this->form_validation->set_rules('ukuran_stok', 'Ukuran Stok', 'required');
        $this->form_validation->set_rules('jml_stok', 'Jumlah Stok', 'required');
        $this->form_validation->set_rules('harga_stok', 'Harga Stok', 'required');
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            // $this->session->set_flashdata('errors', $errors);
            // $this->session->set_flashdata('input', $this->input->post());
            // redirect('Admin/add_user');
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Stok/add_stok').'";</script>';

        } else {
            $nama_stok = $this->input->post('nama_stok');
            $ukuran_stok = $this->input->post('ukuran_stok');
            $jml_stok = $this->input->post('jml_stok');
            $harga_stok = $this->input->post('harga_stok');
            // $level = $this->input->post('level');
            // $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'nama_stok' => $nama_stok,
                'ukuran_stok' => $ukuran_stok,
                'jml_stok' => $jml_stok,
                'harga_stok' => $harga_stok
                
            ];
            $insert = $this->stok_model->create($data);
            if($insert){
                // redirect('Admin/view_user');
                echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Stok/view_stok').'";</script>';
            }else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Stok/add_stok').'";</script>';
            }
        }
    }

    function del_stok($id_stok){
        $insert = $this->stok_model->delete($id_stok);
        redirect('Stok/view_stok');
    }

    public function update_stok($id_stok){
        $datastok = $this->stok_model->findDetail($id_stok);
        $data = [
            'datastok' => $datastok,
        ];
        $this->load->view('edit_stok',$data);
    }
    
    public function update_process(){
        $this->form_validation->set_rules('nama_stok', 'Nama Stok', 'required');
        $this->form_validation->set_rules('ukuran_stok', 'Ukuran Stok', 'required');
        $this->form_validation->set_rules('jml_stok', 'Jumlah Stok', 'required');
        $this->form_validation->set_rules('harga_stok', 'Harga Stok', 'required');
        $id_stok = $this->input->post('id_stok');
            if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            echo '<script>alert("Periksa kembali inputan anda!");window.location.href="'.site_url('/Stok/update_stok/'.$id_stok).'";</script>';

        } else {
            $nama_stok = $this->input->post('nama_stok');
            $ukuran_stok = $this->input->post('ukuran_stok');
            $jml_stok = $this->input->post('jml_stok');
            $harga_stok = $this->input->post('harga_stok');
            $data = [
                'nama_stok' => $nama_stok,
                'ukuran_stok' => $ukuran_stok,
                'jml_stok' => $jml_stok,
                'harga_stok' => $harga_stok
            ];
            $insert = $this->stok_model->update($id_stok,$data);
            if($insert){
                echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Stok/view_stok').'";</script>';
            }else{
                echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Stok/update_stok/'.$id_stok).'";</script>';
            }
        }
    }
   

} 