<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Laporan_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function get_dataHarian($tgl_transaksi)
    {
        // echo $tgl_transaksi;
        // exit();
        $hasil = $this->db->query('SELECT tgl_transaksi, nama_customer, nama_stok, jml_detail, jasa_design, total_detail FROM tb_transaksi, tb_customer, tb_stok, tb_detail WHERE tb_transaksi.id_transaksi=tb_detail.id_transaksi AND tb_transaksi.id_customer=tb_customer.id_customer AND tb_detail.id_stok=tb_stok.id_stok AND tb_transaksi.tgl_transaksi like "'.$tgl_transaksi.'"');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else {
            return array();
        }
    } 
    
    public function get_dataMingguan($tgl_transaksi)
    {
        $hasil = $this->db->query('SELECT tgl_transaksi, nama_customer, nama_stok, jml_detail, jasa_design, total_detail FROM tb_transaksi, tb_customer, tb_stok, tb_detail WHERE tb_transaksi.id_transaksi=tb_detail.id_transaksi AND tb_transaksi.id_customer=tb_customer.id_customer AND tb_detail.id_stok=tb_stok.id_stok AND tgl_transaksi like "2021-07-11%";');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else {
            return array();
        }
    } 

    public function get_dataBulanan($tgl_transaksi)
    {
        $hasil = $this->db->query('SELECT tgl_transaksi, nama_customer, nama_stok, jml_detail, jasa_design, total_detail FROM tb_transaksi, tb_customer, tb_stok, tb_detail WHERE tb_transaksi.id_transaksi=tb_detail.id_transaksi AND tb_transaksi.id_customer=tb_customer.id_customer AND tb_detail.id_stok=tb_stok.id_stok AND tgl_transaksi like "'.$tgl_transaksi.'%"');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else {
            return array();
        }
    } 
    
}
?>