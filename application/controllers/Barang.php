<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('user_model');
        $this->load->model('barang_model');
    }


    public function add_barang(){
        $datauser = $this->user_model->getAll();
        $data = [
            'datauser' => $datauser,
        ];
        $this->load->view('tambah_barang', $data);
    }

    public function add_process(){
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('panjang', 'Panjang', 'required');
        $this->form_validation->set_rules('lebar', 'Lebar', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Barang/add_barang').'";</script>';

        } else {
            $nama_barang = $this->input->post('nama_barang');
            $jenis_barang = $this->input->post('jenis_barang');
            $panjang = $this->input->post('panjang');
            $lebar = $this->input->post('lebar');
            $satuan = $this->input->post('satuan');
            $jml_barang = $this->input->post('jml_barang');
            $tgl_diterima = $this->input->post('tgl_diterima');
            $supplier = $this->input->post('supplier');
            $username = $this->input->post('username');

            $data = [
                'nama_barang' => $nama_barang,
                'jenis_barang' => $jenis_barang,
                'panjang' => $panjang,
                'lebar' => $lebar,
                'satuan' => $satuan,
                'jml_barang' => $jml_barang,
                'tgl_diterima' => $tgl_diterima,
                'supplier' => $supplier,
                'username' => $username,
                'date_create' => date("Y-m-d h:i:s")
            ];
            $insert = $this->barang_model->create($data);
            if($insert){
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
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('panjang', 'Panjang', 'required');
        $this->form_validation->set_rules('lebar', 'Lebar', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
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
            $jenis_barang = $this->input->post('jenis_barang');
            $panjang = $this->input->post('panjang');
            $lebar = $this->input->post('lebar');
            $satuan = $this->input->post('satuan');
            $jml_barang = $this->input->post('jml_barang');
            $tgl_diterima = $this->input->post('tgl_diterima');
            $supplier = $this->input->post('supplier');
            $username = $this->input->post('username');
            $data = [
                'nama_barang' => $nama_barang,
                'jenis_barang' => $jenis_barang,
                'panjang' => $panjang,
                'lebar' => $lebar,
                'satuan' => $satuan,
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