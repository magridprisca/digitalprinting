<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function cek_login($username)
    {
        $hasil = $this->db->where('username', $username)->limit(1)->get('tb_user');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
    
    public function get_datauser($username)
    {
        $hasil = $this->db->query("SELECT * FROM `tb_user` left JOIN `tb_datauser` ON tb_user.username=tb_datauser.username where tb_user.username='$username'");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
}
?>