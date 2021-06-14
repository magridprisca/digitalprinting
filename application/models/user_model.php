<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function get_data()
    {
        $hasil = $this->db->get('tb_user');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
    public function getAll(){
		$hasil = $this->db->order_by("username")->get('tb_user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
    public function create($data){
        $this->db->insert('tb_user', $data);
    }
    public function update($id, $data){
        $row = $this->db->where('username',$id)->get('tb_user')->row();
        // unlink($row->userPhoto);
        $this->db->where('username',$id)->update('tb_user',$data);
    }
    public function delete($id){
        $this->db->where('username',$id)->delete('tb_user');
    }
    public function findDetail($id){
        $hasil = $this->db->where('username=',$id)->limit(1)->get('tb_user');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else {
            return array();
        }
    }
}
?>