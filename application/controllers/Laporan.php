<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_sesi();
        $this->load->model('laporan_model');
        
    }


    public function view_laporanHarian(){
        $tgl_transaksi = date('Y-m-d');
        $datalaporan = $this->laporan_model->get_dataHarian($tgl_transaksi);
        
        $data = [
            'datalaporan' => $datalaporan,
        ];
        $this->load->view('list_laporanHarian',$data);

    }

    public function view_laporanMingguan(){
        $tgl_transaksi = date('Y-m-d');
        $datalaporanMingguan = $this->laporan_model->get_dataMingguan($tgl_transaksi);
        
        $data = [
            'datalaporan' => $datalaporanMingguan,
        ];
        $this->load->view('list_laporanMingguan',$data);

    }

    public function view_laporanBulanan(){
        $tgl_transaksi = date('Y-m-d');
        $datalaporanBulanan = $this->laporan_model->get_dataBulanan($tgl_transaksi);
        
        $data = [
            'datalaporan' => $datalaporanBulanan,
        ];
        $this->load->view('list_laporanBulanan',$data);

    }

} 