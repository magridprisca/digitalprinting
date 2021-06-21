<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Stok_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function get_data()
    {
        $hasil = $this->db->get('tb_stok');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
    public function getAll(){
		$hasil = $this->db->order_by("id_stok")->get('tb_stok');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    public function create($data){
        return $this->db->insert('tb_stok', $data);
    }
    public function update($id, $data){
        $row = $this->db->where('id_stok',$id)->get('tb_stok')->row();
        // unlink($row->userPhoto);
        return $this->db->where('id_stok',$id)->update('tb_stok',$data);
    }
    public function delete($id){
        return $this->db->where('id_stok',$id)->delete('tb_stok');
    }
    public function findDetail($id){
        $hasil = $this->db->where('id_stok=',$id)->limit(1)->get('tb_stok');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>