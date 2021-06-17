<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Barang_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function get_data()
    {
        $hasil = $this->db->get('tb_barangmasuk');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
    public function getAll(){
		$hasil = $this->db->order_by("id_barang")->get('tb_barangmasuk');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    public function create($data){
        $this->db->insert('tb_barangmasuk', $data);
    }
    public function update($id, $data){
        $row = $this->db->where('id_barang',$id)->get('tb_barangmasuk')->row();
        // unlink($row->userPhoto);
        $this->db->where('id_barang',$id)->update('tb_barangmasuk',$data);
    }
    public function delete($id){
        $this->db->where('id_barang',$id)->delete('tb_barangmasuk');
    }
    public function findDetail($id){
        $hasil = $this->db->where('id_barang=',$id)->limit(1)->get('tb_barangmasuk');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>