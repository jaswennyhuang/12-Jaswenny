<?php 
/**
* 
*/
class Admin_model extends CI_Model	{

public $nama_table = 'admin';

	function cek_login_admin($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

	function edit_data($username,$data){
		$this->db->where('username',$username);
		return $this->db->update($this->nama_table,$data);
	}

	function ambil_data_id($username){
		$this->db->where('username', $username);
		return $this->db->get($this->nama_table)->row();
	}	

}
 ?>