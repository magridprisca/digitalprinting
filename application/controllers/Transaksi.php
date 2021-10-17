<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('transaksi_model');
        $this->load->model('detail_model');
        $this->load->model('pelanggan_model');
        $this->load->model('stok_model');
    }

    public function nota($id){
        $datatrx = $this->transaksi_model->findDetail($id);
        
        $datadetail = $this->detail_model->getAllId($id);
        $data = [
            'datatrx' => $datatrx,
            'datadetail' => $datadetail,
            
        ];

        $this->load->view('nota', $data);
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
                'date_created' => date("Y-m-d h:i:s")
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
        $this->form_validation->set_rules('id_stok', 'Panjang', 'required');
        $this->form_validation->set_rules('id_stok', 'Lebar', 'required');
		$this->form_validation->set_rules('jml_detail', 'Jumlah', 'required');
		$this->form_validation->set_rules('harga_detail', 'Harga', 'required');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan data! pastikan isi sudah sesuai");window.location.href="'.site_url('/Transaksi/add_order/'.$id_transaksi).'";</script>';

		} else {
			$id_transaksi = $this->input->post('id_transaksi');
			$nama_file = $this->input->post('nama_file');
			$jenis_brg = $this->input->post('jenis');
            $id_stok = $this->input->post('id_stok');
            $panjang = $this->input->post('panjang');
			$lebar = $this->input->post('lebar');
			$jml_detail = $this->input->post('jml_detail');
			$harga_detail = $this->input->post('harga_detail');
            $jasa_design = $this->input->post('jasa_design');
            $lain_lain = $this->input->post('lain_lain');
            $biaya_lain = $this->input->post('biaya_lain');
			$total = $this->input->post('total');
			
			$data = [
				'id_transaksi' => $id_transaksi,
                'nama_file' => $nama_file,
                'jenis_brg' => $jenis_brg,
                'id_stok' => $id_stok,
                'panjang' => $panjang,
				'lebar' => $lebar,
				'jml_detail' => $jml_detail,
				'harga_detail' => $harga_detail,
				'jasa_design' => $jasa_design,
                'lain_lain' => $lain_lain,
                'biaya_lain' => $biaya_lain,
				'total_detail' => $total,
                'date_created' => date("Y-m-d h:i:s")
			];
			$insert = $this->detail_model->create($data);

			if($insert){
				redirect('Transaksi/add_order2/'.$id_transaksi);
			}else{
                echo '<script>alert("Gagal menyimpan data.");window.location.href="'.site_url('/Transaksi/add_order/'.$id_transaksi).'";</script>';
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
    
    function del_detail($id_detail,$id_transaksi){
        $insert = $this->detail_model->delete($id_detail);
        redirect('Transaksi/add_order2/'.$id_transaksi);
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
        $datadetail = $this->detail_model->getAllId($id);
        $total = $this->detail_model->total_bayar($id);
        $datastok = $this->stok_model->getAll();
        $data = [
            'datatrx' => $datatrx,
            'datacus' => $datacus,
            'datastok' => $datastok,
            'datadetail' => $datadetail,
            'total' => $total,
        ];
        $this->load->view('bayar', $data);
    }
    
    public function bayar_process(){
        $this->form_validation->set_rules('total_transaksi', 'Total Bayar', 'required');
        $this->form_validation->set_rules('dibayar', 'Dibayar', 'required');
		$this->form_validation->set_rules('kembali', 'Kembali', 'required');
        if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
            echo '<script>alert("Gagal menyimpan pembayaran! pastikan isi sudah sesuai");window.location.href="'.site_url('/Transaksi/add_order/'.$id_transaksi).'";</script>';

		} else {
			$id_transaksi = $this->input->post('id_transaksi');
			$total_transaksi = $this->input->post('total_transaksi');
			$jenis_customer = $this->input->post('jenis_customer');
			$diskon = $this->input->post('diskon');
            $dibayar = $this->input->post('dibayar');
			$kembali = $this->input->post('kembali');
            $nota = $this->input->post('nota');
			
			$data = [
				'total_transaksi' => $total_transaksi,
                'dibayar' => $dibayar,
				'kembali' => $kembali,
				'jenis_customer' => $jenis_customer,
				'diskon' => $diskon,
				'tgl_bayar' => date('Y-m-d h:i:s'),
                'nota' => $nota,
				// 'ket_bayar' => 1,
			];
			$insert = $this->transaksi_model->update($id_transaksi,$data);

			if($insert){
                echo '<script>alert("Pembayaran berhasil dilakukan.");window.location.href="'.site_url('/Transaksi/nota/'.$id_transaksi).'";</script>';
				// redirect('Transaksi/bayar/'.$id_transaksi);
			}else{
                echo '<script>alert("Gagal menyimpan pembayaran.");window.location.href="'.site_url('/Transaksi/add_order/'.$id_transaksi).'";</script>';
            }
		}
    }
    public function lunas($id_transaksi){
			$data = [
				'ket_bayar' => 1,
			];
			$insert = $this->transaksi_model->update($id_transaksi,$data);

			if($insert){
                echo '<script>alert("Pembayaran transaksi selesai.");window.location.href="'.site_url('/Transaksi/view_pembayaran/').'";</script>';
				// redirect('Transaksi/bayar/'.$id_transaksi);
			}else{
                echo '<script>alert("Gagal menyimpan pembayaran.");window.location.href="'.site_url('/Transaksi/add_order/'.$id_transaksi).'";</script>';
            }
    }

    public function riwayat_pembayaran($id){
        $datatrx = $this->transaksi_model->findDetail($id);
        $datacus = $this->pelanggan_model->getAll();
        $datadetail = $this->detail_model->getAllId($id);
        $total = $this->detail_model->total_bayar($id);
        $datastok = $this->stok_model->getAll();
        $data = [
            'datatrx' => $datatrx,
            'datacus' => $datacus,
            'datastok' => $datastok,
            'datadetail' => $datadetail,
            'total' => $total,
        ];
        $this->load->view('riwayat_detail', $data);
    }


} 