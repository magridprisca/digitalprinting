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
        // if($tgl==null)
        if (isset($_REQUEST['tgl_hari'])==null) 
        {
        $tgl_transaksi = date('Y-m-d');
        }else{
            $tgl_transaksi = $this->input->post("tgl_hari");
        }
        
        $datalaporan = $this->laporan_model->get_dataHarian($tgl_transaksi);
        
        $data = [
            'datalaporan' => $datalaporan,
        ];
        $this->load->view('list_laporanHarian',$data);

    }

    public function view_laporanMingguan(){
        if (isset($_REQUEST['tgl_awal'])==null) 
        {
        $tgl_akhir = date('Y-m-d');
        $tgl_awal = date('Y-m-d', strtotime('-6 days', strtotime( $tgl_akhir )));
        
        }else{
            $tgl_awal = $this->input->post("tgl_awal");
            $tgl_akhir = $this->input->post("tgl_akhir");
        }

        $datalaporanMingguan = $this->laporan_model->get_dataMingguan($tgl_awal, $tgl_akhir);
        
        $data = [
            'datalaporan' => $datalaporanMingguan,
        ];
        $this->load->view('list_laporanMingguan',$data);

    }

    public function view_laporanBulanan(){
        if (isset($_REQUEST['tgl_bln'])==null) 
        {
        $tgl_transaksi = date('Y-m');
        }else{
             
            $tgl_bln = $this->input->post('tgl_bln');
            $tgl_thn = $this->input->post('tgl_thn');
            $tgl_transaksi = $tgl_thn."-".$tgl_bln;
        }
        // echo $tgl_transaksi;
        // exit();
        $datalaporan = $this->laporan_model->get_dataBulanan($tgl_transaksi);
        
        $data = [
            'datalaporan' => $datalaporan,
        ];
        $this->load->view('list_laporanBulanan',$data);

    }

} 