<?php 
/**
* 
*/
class Member_model extends CI_Model	{

public $nama_table = 'member';
public $username = 'username';
public $order = 'DESC';

	function cek_login_member($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

		function ambil_data(){
	$this->db->order_by($this->username,$this->order);
	return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($username){
		$this->db->where($this->username, $username);
		return $this->db->get($this->nama_table)->row();
	}	

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}

	function hapus_data($username){
		$this->db->where($this->username,$username);
		return $this->db->delete($this->nama_table);
	}

	function edit_data($username,$data){
		$this->db->where($this->username,$username);
		return $this->db->update($this->nama_table,$data);
	}

}
 ?>