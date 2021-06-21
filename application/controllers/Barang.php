<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('barang_model');
        
    }


    public function add_barang(){
    
        $this->load->view('tambah_barang');

    }

    public function add_process(){
        // $this->form_validation->set_rules('id_barang', 'ID Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            // $this->session->set_flashdata('errors', $errors);
            // $this->session->set_flashdata('input', $this->input->post());
            // redirect('Admin/add_user');
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Barang/add_barang').'";</script>';

        } else {
            // $id_barang = $this->input->post('id_barang');
            $nama_barang = $this->input->post('nama_barang');
            $jml_barang = $this->input->post('jml_barang');
            $tgl_diterima = $this->input->post('tgl_diterima');
            $supplier = $this->input->post('supplier');
            $username = $this->input->post('username');
            // $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                // 'id_barang' => $id_barang,
                'nama_barang' => $nama_barang,
                'jml_barang' => $jml_barang,
                'tgl_diterima' => $tgl_diterima,
                'supplier' => $supplier,
                'username' => $username
            ];
            $insert = $this->barang_model->create($data);
            if($insert){
                // redirect('Admin/view_barang');
                echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Barang/view_barang').'";</script>';
            }else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Barang/add_barang').'";</script>';
            }
        }
    }

    function del_barang($id_barang){
        $insert = $this->barang_model->delete($id_barang);
        redirect('Barang/view_barang');
    }

    public function update_barang($id_barang){
        $databarang = $this->barang_model->findDetail($id_barang);
        $data = [
            'databarang' => $databarang,
        ];
        $this->load->view('edit_barang',$data);
    }
    
    public function update_process(){
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $id_barang = $this->input->post('id_barang');
            if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            echo '<script>alert("Periksa kembali inputan anda!");window.location.href="'.site_url('/Barang/update_barang/'.$id_barang).'";</script>';


        } else {
            $nama_barang = $this->input->post('nama_barang');
            $jml_barang = $this->input->post('jml_barang');
            $tgl_diterima = $this->input->post('tgl_diterima');
            $supplier = $this->input->post('supplier');
            $username = $this->input->post('username');
            $data = [
                'nama_barang' => $nama_barang,
                'jml_barang' => $jml_barang,
                'tgl_diterima' => $tgl_diterima,
                'supplier' => $supplier,
                'username' => $username
            ];
            $insert = $this->barang_model->update($id_barang,$data);
            if($insert){
                echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Barang/view_barang').'";</script>';
            }else{
                echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Barang/update_barang/'.$id_barang).'";</script>';
            }
        }
    }

    public function view_barang(){
        $databarang = $this->barang_model->getAll();
        $data = [
            'databarang' => $databarang,
        ];
        $this->load->view('list_barang',$data);

    }


} 