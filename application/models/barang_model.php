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
		$this->db->select('*');
        $this->db->from('tb_barangmasuk');
        $this->db->join('tb_user', 'tb_user.username = tb_barangmasuk.username');
        $this->db->order_by("id_barang");
        $hasil = $this->db->get();
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else {
            return array();
        }
	}
    public function create($data){
        return $this->db->insert('tb_barangmasuk', $data);
    }
    public function update($id, $data){
        $row = $this->db->where('id_barang',$id)->get('tb_barangmasuk')->row();
        // unlink($row->userPhoto);
        return $this->db->where('id_barang',$id)->update('tb_barangmasuk',$data);
    }
    public function delete($id){
        return $this->db->where('id_barang',$id)->delete('tb_barangmasuk');
    }
    public function findDetail($id){
        $this->db->select('*');
        $this->db->from('tb_barangmasuk');
        $this->db->join('tb_user', 'tb_user.username = tb_barangmasuk.username');
        $this->db->where('id_barang=',$id)->limit(1);
        $hasil = $this->db->get();
        // $hasil = $this->db->where('id_karyawan=',$id)->limit(1)->get('tb_karyawan');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>