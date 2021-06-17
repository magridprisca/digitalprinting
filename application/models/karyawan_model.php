<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Karyawan_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function get_data()
    {
        $hasil = $this->db->get('tb_karyawan');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
    public function getAll(){
		$hasil = $this->db->order_by("id_karyawan")->get('tb_karyawan');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    public function create($data){
        $this->db->insert('tb_karyawan', $data);
    }
    public function update($id, $data){
        $row = $this->db->where('id_karyawan',$id)->get('tb_karyawan')->row();
        // unlink($row->userPhoto);
        $this->db->where('id_karyawan',$id)->update('tb_karyawan',$data);
    }
    public function delete($id){
        $this->db->where('id_karyawan',$id)->delete('tb_karyawan');
    }
    public function findDetail($id){
        $hasil = $this->db->where('id_karyawan=',$id)->limit(1)->get('tb_karyawan');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>