<?php 
/**
* 
*/
class Pesan_model extends CI_Model	{

public $nama_table = 'pesan';
public $id_pesan = 'id_pesan';
public $order = 'DESC';


	function ambil_data(){
	$this->db->order_by($this->id_pesan,$this->order);
	return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($id_pesan){
		$this->db->where($this->id_pesan, $id_pesan);
		return $this->db->get($this->nama_table)->row();
	}	

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}

	function hapus_data($id_pesan){
		$this->db->where($this->id_pesan,$id_pesan);
		return $this->db->delete($this->nama_table);
	}

	function edit_data($id_pesan,$data){
		$this->db->where($this->id_pesan,$id_pesan);
		return $this->db->update($this->nama_table,$data);
	}

}
 ?>