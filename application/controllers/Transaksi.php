<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('transaksi_model');
    }

    public function add_transaksi(){
        $datauser = $this->user_model->getAll();
        $data = [
            'datauser' => $datauser,
        ];
        $this->load->view('tambah_transaksi', $data);
    }

    public function add_process(){
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama_transaksi', 'Nama transaksi', 'required');
		$this->form_validation->set_rules('nohp_transaksi', 'No HP', 'required');
		$this->form_validation->set_rules('alamat_transaksi', 'Alamat', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Transaksi/add_transaksi').'";</script>';

		} else {
			$tgl_masuk = $this->input->post('tgl_masuk');
			$username = $this->input->post('username');
			$nama_transaksi = $this->input->post('nama_transaksi');
			$nohp_transaksi = $this->input->post('nohp_transaksi');
			$alamat_transaksi = $this->input->post('alamat_transaksi');
			$posisi = $this->input->post('posisi');
			$data = [
				'username' => $username,
				'tgl_masuk' => $tgl_masuk,
				'nama_transaksi' => $nama_transaksi,
				'nohp_transaksi' => $nohp_transaksi,
				'alamat_transaksi'	=> $alamat_transaksi,
				'posisi'	=> $posisi
			];
			$insert = $this->transaksi_model->create($data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Transaksi/view_transaksi').'";</script>';
			}else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Transaksi/add_transaksi').'";</script>';
            }
		}
    }

    public function view_transaksi(){
        $datatransaksi = $this->transaksi_model->getAll();
        $data = [
            'datatransaksi' => $datatransaksi,
        ];
        $this->load->view('list_transaksi',$data);

    }
    
    function del_transaksi($id_transaksi){
        $insert = $this->transaksi_model->delete($id_transaksi);
        redirect('transaksi/view_transaksi');
    }

    public function update_transaksi($id_transaksi){
        $datatransaksi = $this->transaksi_model->findDetail($id_transaksi);
        $data = [
            'datatransaksi' => $datatransaksi,
        ];
        $this->load->view('edit_transaksi',$data);
    }
    
    public function update_process(){
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama_transaksi', 'Nama transaksi', 'required');
		$this->form_validation->set_rules('nohp_transaksi', 'No HP', 'required');
		$this->form_validation->set_rules('alamat_transaksi', 'Alamat', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
		$id_transaksi = $this->input->post('id_transaksi');
            if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Periksa kembali inputan anda!");window.location.href="'.site_url('/Transaksi/update_transaksi/'.$id_transaksi).'";</script>';

		} else {
			$tgl_masuk = $this->input->post('tgl_masuk');
			$username = $this->input->post('username');
			$nama_transaksi = $this->input->post('nama_transaksi');
			$nohp_transaksi = $this->input->post('nohp_transaksi');
			$alamat_transaksi = $this->input->post('alamat_transaksi');
			$posisi = $this->input->post('posisi');
			$data = [
				'username' => $username,
				'tgl_masuk' => $tgl_masuk,
				'nama_transaksi' => $nama_transaksi,
				'nohp_transaksi' => $nohp_transaksi,
				'alamat_transaksi'	=> $alamat_transaksi,
				'posisi'	=> $posisi
			];
			$insert = $this->transaksi_model->update($id_transaksi,$data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Transaksi/view_transaksi').'";</script>';
			}else{
                echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Transaksi/update_transaksi/'.$id_transaksi).'";</script>';
            }
		}
    }


} 