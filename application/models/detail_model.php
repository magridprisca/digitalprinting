<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class detail_model extends CI_Model{
  
    public function get_data()
    {
        $hasil = $this->db->get('tb_detail');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_detail');
        $this->db->join('tb_transaksi', 'tb_transaksi.id_transaksi = tb_detail.id_transaksi');
        $this->db->join('tb_customer', 'tb_customer.id_customer = tb_transaksi.id_customer');
        $this->db->join('tb_stok', 'tb_stok.id_stok = tb_detail.id_stok');
        $this->db->order_by("id_detail");
        $hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    
    public function getAllId($id){
        $this->db->select('*');
        $this->db->from('tb_detail');
        $this->db->join('tb_transaksi', 'tb_transaksi.id_transaksi = tb_detail.id_transaksi');
        $this->db->join('tb_customer', 'tb_customer.id_customer = tb_transaksi.id_customer');
        $this->db->join('tb_stok', 'tb_stok.id_stok = tb_detail.id_stok');
        $this->db->where("tb_detail.id_transaksi",$id);
        $this->db->order_by("id_detail");
        $hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    public function create($data){
        $this->db->insert('tb_detail', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }
    public function update($id, $data){
        $row = $this->db->where('id_detail',$id)->get('tb_detail')->row();
        // unlink($row->userPhoto);
        return $this->db->where('id_detail',$id)->update('tb_detail',$data);
    }
    public function delete($id){
        return $this->db->where('id_detail',$id)->delete('tb_detail');
    }
    public function findDetail($id){
        $this->db->select('*');
        $this->db->from('tb_detail');
        $this->db->join('tb_transaksi', 'tb_transaksi.id_transaksi = tb_detail.id_transaksi');
        $this->db->join('tb_customer', 'tb_customer.id_customer = tb_transaksi.id_customer');
        $this->db->where('id_detail=',$id)->limit(1);
        $hasil = $this->db->get();
        // $hasil = $this->db->where('id_detail=',$id)->limit(1)->get('tb_detail');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>