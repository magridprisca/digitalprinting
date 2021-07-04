<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        
        $this->load->model('stok_model');
        $this->load->model('barang_model');

    }

    public function add_stok($id_barang){
        
        $databarang = $this->barang_model->findDetail($id_barang);
        $data = [
            'databarang' => $databarang,
        ];
        $this->load->view('tambah_stok', $data);

    }

    public function view_stok(){
        $datastok = $this->stok_model->getAll();
        $data = [
            'datastok' => $datastok,
        ];
        $this->load->view('list_stok',$data);
        $this->load->model('barang_model');

    }

    public function add_process(){
        $this->form_validation->set_rules('nama_stok', 'Nama Stok', 'required');
        $this->form_validation->set_rules('panjang_stok', 'Panjang Stok', 'required');
        $this->form_validation->set_rules('lebar_stok', 'Lebar Stok', 'required');
        $this->form_validation->set_rules('satuan_stok', 'Satuan Stok', 'required');
        $this->form_validation->set_rules('jml_stok', 'Jumlah Stok', 'required');
        $this->form_validation->set_rules('harga_stok', 'Harga Stok', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Stok/add_stok').'";</script>';

        } else {
            $nama_stok = $this->input->post('nama_stok');
            $panjang_stok = $this->input->post('panjang_stok');
            $lebar_stok = $this->input->post('lebar_stok');
            $satuan_stok = $this->input->post('satuan_stok');
            $jml_stok = $this->input->post('jml_stok');
            $harga_stok = $this->input->post('harga_stok');
            $id_barang = $this->input->post('id_barang');

            $data = [
                'id_barang' => $id_barang,
                'nama_stok' => $nama_stok,
                'panjang_stok' => $panjang_stok,
                'lebar_stok' => $lebar_stok,
                'satuan_stok' => $satuan_stok,
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
        $databarang = $this->barang_model->getAll();

        $datastok = $this->stok_model->findDetail($id_stok);
        $data = [
            'datastok' => $datastok,
            'databarang' => $databarang,
        ];
        $this->load->view('edit_stok',$data);
    }
    
    public function update_process(){
        $this->form_validation->set_rules('nama_stok', 'Nama Stok', 'required');
        $this->form_validation->set_rules('panjang_stok', 'Panjang Stok', 'required');
        $this->form_validation->set_rules('lebar_stok', 'Lebar Stok', 'required');
        $this->form_validation->set_rules('satuan_stok', 'Satuan Stok', 'required');
        $this->form_validation->set_rules('jml_stok', 'Jumlah Stok', 'required');
        $this->form_validation->set_rules('harga_stok', 'Harga Stok', 'required');
        $id_stok = $this->input->post('id_stok');
            if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            echo '<script>alert("Periksa kembali inputan anda!");window.location.href="'.site_url('/Stok/update_stok/'.$id_stok).'";</script>';

        } else {
            $nama_stok = $this->input->post('nama_stok');
            $panjang_stok = $this->input->post('panjang_stok');
            $lebar_stok = $this->input->post('lebar_stok');
            $satuan_stok = $this->input->post('satuan_stok');
            $jml_stok = $this->input->post('jml_stok');
            $harga_stok = $this->input->post('harga_stok');
            $id_barang = $this->input->post('id_barang');
            $data = [
                'id_barang' => $id_barang,
                'nama_stok' => $nama_stok,
                'panjang_stok' => $panjang_stok,
                'lebar_stok' => $lebar_stok,
                'satuan_stok' => $satuan_stok,
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