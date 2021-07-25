<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class transaksi_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_user', 'tb_user.username = tb_transaksi.username');
        $this->db->join('tb_detail', 'tb_detail.id_transaksi = tb_transaksi.id_transaksi');
        $this->db->join('tb_stok', 'tb_stok.id_stok = tb_detail.id_stok');
        
        $this->db->join('tb_customer', 'tb_customer.id_customer = tb_transaksi.id_customer');
        $this->db->order_by("tb_transaksi.id_transaksi");
        $this->db->where('ket_bayar', '1');
        $hasil = $this->db->get();
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else {
            return array();
        }
    } 

    public function get_datapembayaran()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_user', 'tb_user.username = tb_transaksi.username');
        // $this->db->join('tb_detail', 'tb_detail.id_transaksi = tb_transaksi.id_transaksi');
        // $this->db->join('tb_stok', 'tb_stok.id_stok = tb_detail.id_stok');
        
        $this->db->join('tb_customer', 'tb_customer.id_customer = tb_transaksi.id_customer');
        $this->db->order_by("tb_transaksi.id_transaksi");
        $this->db->where('ket_bayar', '0');
        $hasil = $this->db->get();
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else {
            return array();
        }
    } 

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_customer', 'tb_customer.id_customer = tb_transaksi.id_customer');
        $this->db->join('tb_user', 'tb_user.username = tb_transaksi.username');
        $this->db->order_by("id_transaksi");
        $hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    public function create($data){
        $this->db->insert('tb_transaksi', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }
    public function update($id, $data){
        $row = $this->db->where('id_transaksi',$id)->get('tb_transaksi')->row();
        // unlink($row->userPhoto);
        return $this->db->where('id_transaksi',$id)->update('tb_transaksi',$data);
    }
    public function delete($id){
        return $this->db->where('id_transaksi',$id)->delete('tb_transaksi');
    }
    public function findDetail($id){
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_user', 'tb_user.username = tb_transaksi.username');
        $this->db->join('tb_customer', 'tb_customer.id_customer = tb_transaksi.id_customer');
        $this->db->where('id_transaksi=',$id)->limit(1);
        $hasil = $this->db->get();
        // $hasil = $this->db->where('id_transaksi=',$id)->limit(1)->get('tb_transaksi');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>