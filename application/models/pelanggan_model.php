<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pelanggan_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function get_data()
    {
        $hasil = $this->db->get('tb_customer');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
    public function getAll(){
		$hasil = $this->db->order_by("id_customer")->get('tb_customer');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    public function create($data){
        return $this->db->insert('tb_customer', $data);
    }
    public function update($id, $data){
        $row = $this->db->where('id_customer',$id)->get('tb_customer')->row();
        // unlink($row->userPhoto);
        return $this->db->where('id_customer',$id)->update('tb_customer',$data);
    }
    public function delete($id){
        return $this->db->where('id_customer',$id)->delete('tb_customer');
    }
    public function findDetail($id){
        $hasil = $this->db->where('id_customer=',$id)->limit(1)->get('tb_customer');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>