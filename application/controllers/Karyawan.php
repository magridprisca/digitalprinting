<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('user_model');
        $this->load->model('karyawan_model');
    }

    public function add_karyawan(){
        $datauser = $this->user_model->getAll();
        $data = [
            'datauser' => $datauser,
        ];
        $this->load->view('tambah_karyawan', $data);
    }

    public function add_process(){
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required');
		$this->form_validation->set_rules('nohp_karyawan', 'No HP', 'required');
		$this->form_validation->set_rules('alamat_karyawan', 'Alamat', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Karyawan/add_karyawan').'";</script>';

		} else {
			$tgl_masuk = $this->input->post('tgl_masuk');
			$username = $this->input->post('username');
			$nama_karyawan = $this->input->post('nama_karyawan');
			$nohp_karyawan = $this->input->post('nohp_karyawan');
			$alamat_karyawan = $this->input->post('alamat_karyawan');
			$posisi = $this->input->post('posisi');
			
			$data = [
				'username' => $username,
				'tgl_masuk' => $tgl_masuk,
				'nama_karyawan' => $nama_karyawan,
				'nohp_karyawan' => $nohp_karyawan,
				'alamat_karyawan'	=> $alamat_karyawan,
				'posisi'	=> $posisi
			];
			$insert = $this->karyawan_model->create($data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Karyawan/view_karyawan').'";</script>';
			}else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Karyawan/add_karyawan').'";</script>';
            }
		}
    }

    public function view_karyawan(){
        $datakaryawan = $this->karyawan_model->getAll();
        $data = [
            'datakaryawan' => $datakaryawan,
        ];
        $this->load->view('list_karyawan',$data);

    }
    
    function del_karyawan($id_karyawan){
        $insert = $this->karyawan_model->delete($id_karyawan);
        redirect('Karyawan/view_karyawan');
    }

    public function update_karyawan($id_karyawan){
        $datakaryawan = $this->karyawan_model->findDetail($id_karyawan);
        $data = [
            'datakaryawan' => $datakaryawan,
        ];
        $this->load->view('edit_karyawan',$data);
    }
    
    public function update_process(){
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required');
		$this->form_validation->set_rules('nohp_karyawan', 'No HP', 'required');
		$this->form_validation->set_rules('alamat_karyawan', 'Alamat', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
		$id_karyawan = $this->input->post('id_karyawan');
            if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Periksa kembali inputan anda!");window.location.href="'.site_url('/Karyawan/update_karyawan/'.$id_karyawan).'";</script>';

		} else {
			$tgl_masuk = $this->input->post('tgl_masuk');
			$username = $this->input->post('username');
			$nama_karyawan = $this->input->post('nama_karyawan');
			$nohp_karyawan = $this->input->post('nohp_karyawan');
			$alamat_karyawan = $this->input->post('alamat_karyawan');
			$posisi = $this->input->post('posisi');
			$data = [
				'username' => $username,
				'tgl_masuk' => $tgl_masuk,
				'nama_karyawan' => $nama_karyawan,
				'nohp_karyawan' => $nohp_karyawan,
				'alamat_karyawan'	=> $alamat_karyawan,
				'posisi'	=> $posisi
			];
			$insert = $this->karyawan_model->update($id_karyawan,$data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Karyawan/view_karyawan').'";</script>';
			}else{
                echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Karyawan/update_karyawan/'.$id_karyawan).'";</script>';
            }
		}
    }


} 