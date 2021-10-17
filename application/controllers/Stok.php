<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        date_default_timezone_set("Asia/Jakarta");
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
        $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('harga_stok', 'Harga Stok', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors(); 
            // echo '<script>alert("Periksa Kembali Form anda! '.$errors.'");window.location.href="'.site_url('/Stok/add_stok/'.$this->input->post('id_barang')).'";</script>';

        } else {
            $nama_stok = $this->input->post('nama_stok');
            $jenis_stok = $this->input->post('jenis_stok');
            $panjang_stok = $this->input->post('panjang_stok');
            $lebar_stok = $this->input->post('lebar_stok');
            $satuan_barang = $this->input->post('satuan_barang');
            $jml_barang = $this->input->post('jml_barang');
            $satuan_stok = $this->input->post('satuan_stok');
            $jml_stok = $this->input->post('jml_stok');
            $potong = $this->input->post('potong');
            $harga_stok = $this->input->post('harga_stok');
            $id_barang = $this->input->post('id_barang');

            if($jenis_stok=="Banner"){
                if($potong==1){
                    $lebar = array(106, 107, 107);
                }else if($potong==2){
                    $lebar = array(160, 160);
                }else if($potong==3){
                    $lebar = array(210, 110);
                }else if($potong==4){
                    $lebar = array(260, 60);
                }

                foreach ($lebar as $lebar_value) {
                    $data = [
                        'id_barang' => $id_barang,
                        'nama_stok' => $nama_stok,
                        'jenis_stok' => $jenis_stok,
                        'panjang_stok' => $panjang_stok,
                        'lebar_stok' => $lebar_value,
                        'satuan_barang' => $satuan_barang,
                        'jml_barang' => $jml_barang,
                        'satuan_stok' => $satuan_stok,
                        'jml_stok' => $jml_stok,
                        'potong' => $potong,
                        'harga_stok' => $harga_stok,
                        'date_created' => date("Y-m-d h:i:s")
                    ];
                    $insert = $this->stok_model->create($data);
                }

            }else{
                $data = [
                    'id_barang' => $id_barang,
                    'nama_stok' => $nama_stok,
                    'panjang_stok' => $panjang_stok,
                    'lebar_stok' => $lebar_stok,
                    'satuan_barang' => $satuan_barang,
                    'jml_barang' => $jml_barang,
                    'satuan_stok' => $satuan_stok,
                    'jml_stok' => $jml_stok,
                    'potong' => $potong,
                    'harga_stok' => $harga_stok,
                    'date_created' => date("Y-m-d h:i:s")
                ];
                $insert = $this->stok_model->create($data);
            }
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

    public function cariData_stok () {
    	$fungsi	= $this->input->get('fungsi');

        if($fungsi == 1) {
            $sql = 'SELECT * FROM tb_stok';
        } else if ($fungsi == 2) {
            $id_stok = $this->input->get('id_stok');
            $sql = 'SELECT * FROM tb_stok WHERE id_stok='. $id_stok . '';
        }

        $data = $this->db->query ($sql)->row();

    	if($data) {
    		echo json_encode ([
    			'status' => true,
    			'data'   => $data,
            ]);
    	} else {
    		echo json_encode ([
    			'status' => false,
    			'data'   => 'Informasi yang anda masukkan salah!'
    		]);
        }
	}
   

} 