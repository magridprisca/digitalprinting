<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('transaksi_model');
        $this->load->model('detail_model');
        $this->load->model('pelanggan_model');
        $this->load->model('stok_model');
    }

    public function add_order(){
        $datacus = $this->pelanggan_model->getAll();
        $datastok = $this->stok_model->getAll();
        $data = [
            'datacus' => $datacus,
            'datastok' => $datastok,
        ];
        $this->load->view('tambah_order', $data);
    }

    public function addorder_process(){
        $this->form_validation->set_rules('tgl_transaksi', 'Tanggal', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('id_customer', 'Customer', 'required');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan data! pastikan isi sudah sesuai");window.location.href="'.site_url('/Transaksi/add_order').'";</script>';

		} else {
			$tgl_transaksi = $this->input->post('tgl_transaksi');
			$username = $this->input->post('username');
			$id_customer = $this->input->post('id_customer');
			
			$data = [
				'username' => $username,
				'tgl_transaksi' => $tgl_transaksi,
				'id_customer' => $id_customer,
			];
			$insert = $this->transaksi_model->create($data);

			if($insert){
				redirect('Transaksi/add_order2/'.$insert);
			}else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Transaksi/add_order').'";</script>';
            }
		}
    }

	public function add_order2($id){
        $datatrx = $this->transaksi_model->findDetail($id);
        $datacus = $this->pelanggan_model->getAll();
        $datadetail = $this->detail_model->getAllId($id);
        $datastok = $this->stok_model->getAll();
        $data = [
            'datatrx' => $datatrx,
            'datacus' => $datacus,
            'datastok' => $datastok,
            'datadetail' => $datadetail,
        ];
        $this->load->view('tambah_order2', $data);
    }
    
    public function addorder_process2(){
        $this->form_validation->set_rules('id_stok', 'Nama stok', 'required');
		$this->form_validation->set_rules('jml_detail', 'Jumlah', 'required');
		$this->form_validation->set_rules('harga_detail', 'Harga', 'required');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan data! pastikan isi sudah sesuai");window.location.href="'.site_url('/Transaksi/add_order').'";</script>';

		} else {
			$id_transaksi = $this->input->post('id_transaksi');
			$id_stok = $this->input->post('id_stok');
			$jml_detail = $this->input->post('jml_detail');
			$harga_detail = $this->input->post('harga_detail');
			$jasa_design = $this->input->post('jasa_design');
			$total = $this->input->post('total');
			
			$data = [
				'id_transaksi' => $id_transaksi,
				'id_stok' => $id_stok,
				'jml_detail' => $jml_detail,
				'harga_detail' => $harga_detail,
				'jasa_design' => $jasa_design,
				'total_detail' => $total,
			];
			$insert = $this->detail_model->create($data);

			if($insert){
				redirect('Transaksi/add_order2/'.$id_transaksi);
			}else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Transaksi/add_order').'";</script>';
            }
		}
    }

    public function view_order(){
        $datatransaksi = $this->transaksi_model->getAll();
        $data = [
            'datatransaksi' => $datatransaksi,
        ];
        $this->load->view('list_order',$data);

    }
    
    function del_order($id_transaksi){
        $insert = $this->transaksi_model->delete($id_transaksi);
        redirect('transaksi/view_order');
    }

    public function update_order($id_transaksi){
        $datatransaksi = $this->transaksi_model->findDetail($id_transaksi);
        $data = [
            'datatransaksi' => $datatransaksi,
        ];
        $this->load->view('edit_order',$data);
    }
    
    public function updateorder_process(){
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama_transaksi', 'Nama transaksi', 'required');
		$this->form_validation->set_rules('nohp_transaksi', 'No HP', 'required');
		$this->form_validation->set_rules('alamat_transaksi', 'Alamat', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
		$id_transaksi = $this->input->post('id_transaksi');
            if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Periksa kembali inputan anda!");window.location.href="'.site_url('/Transaksi/update_order/'.$id_transaksi).'";</script>';

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
				echo '<script>alert("Sukses! Anda berhasil menyimpan data.");window.location.href="'.site_url('/Transaksi/view_order').'";</script>';
			}else{
                echo '<script>alert("Gagal menyimpan data!");window.location.href="'.site_url('/Transaksi/update_order/'.$id_transaksi).'";</script>';
            }
		}
    }

    public function view_riwayat(){
        $datariwayat = $this->transaksi_model->get_data();
        $data = [
            'datariwayat' => $datariwayat,
        ];
        $this->load->view('riwayat_transaksi',$data);

    }

    public function view_pembayaran(){
        $datapembayaran = $this->transaksi_model->get_datapembayaran();
        $data = [
            'datapembayaran' => $datapembayaran,
        ];
        $this->load->view('pembayaran',$data);

    }

    public function bayar($id){
        $datatrx = $this->transaksi_model->findDetail($id);
        $datacus = $this->pelanggan_model->getAll();
        $datadetail = $this->detail_model->getAll();
        $datastok = $this->stok_model->getAll();
        $data = [
            'datatrx' => $datatrx,
            'datacus' => $datacus,
            'datastok' => $datastok,
            'datadetail' => $datadetail,
        ];
        $this->load->view('bayar', $data);
    }


} 