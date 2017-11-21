<?php 
/**
* 
*/
class Transaksi_model extends CI_Model	{
	public $nama_table = 'transaksi';
	public $id = 'id_transaksi';
	public $order = 'DESC';

	function ambil_data(){
	$this->db->order_by($this->id,$this->order);
	return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->nama_table)->row();
	}

	function ambil_data_username($username){
		/*$query=$this->db->select('*');
		$query=$this->db->from($this->nama_table);
		$query=$this->db->where	('username',$username);
		$query=$this->db->get()->result();
return $query;*/
		//$this->db->select('member.nama, workshop.nama_workshop,transaksi.id_transaksi, transaksi.tgl_transaksi, transaksi.bukti_transfer, transaksi.status');
		$this->db->select('member.*, workshop.*,transaksi.*');
		$this->db->from('transaksi');
		$this->db->from('member');
		$this->db->from('workshop');
		$this->db->where('member.username = transaksi.username');
		$this->db->where('workshop.id_workshop = transaksi.id_workshop');
		$this->db->where('transaksi.username', $username);
		return $query=$this->db->get()->result();
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

/*
 <?php foreach ($transaksi as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value->id_transaksi; ?></td>
                    <td><?php echo $value->tgl_transaksi; ?></td>
                    <td><?php echo $value->id_workshop; ?></td>
                    <td><?php echo $value->username; ?></td>
                    <td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/uploads/<?php echo $value->bukti_transfer; ?>"></td>
                    <td><?php echo $value->status; ?></td>
                    <td>
                        
                            <a href="<?php echo site_url('Transaksi/edit/'.$value->id_transaksi); ?> " class="btn btn-warning">
                            <i>Edit </i>
                        </a>
                        <a href="<?php echo site_url('Transaksi/download/'.$value->id_transaksi); ?> " class="btn btn-danger">
                            <i>Download</i>
                        </a>

                    </td>
                </tr>
                <?php } ?>
*/

 ?>

 