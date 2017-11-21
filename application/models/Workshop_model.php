<?php 
/**
* 
*/
class Workshop_model extends CI_Model	{
	public $nama_table = 'workshop';
	public $id = 'id_workshop';
	public $order = 'DESC';
	public $limit = '1';

	function ambil_data(){
	$this->db->order_by($this->id,$this->order);
	return $this->db->get($this->nama_table)->result();
	}

	function ambil_data2(){
	$this->db->order_by($this->id,$this->order);
	$this->db->limit($this->limit);
	return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->nama_table)->row();
	}	

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}

	function hapus_data($id){
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table);
	}

	function edit_data($id,$data){
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);
	}


}

 ?>