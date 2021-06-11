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
}
?>