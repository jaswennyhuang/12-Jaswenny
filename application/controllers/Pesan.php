<?php 
class pesan extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		
		$this->load->model('Pesan_model');
	}

	function index()
	{

		$data['pesan'] = $this->Pesan_model->ambil_data();
		
		$this->load->view('List_pesan',$data);
		//print_r($data);
		//print_r($data);;
	}

	function tambah(){
		$data=array(
			'username'=>set_value('username'),
			'isi_pesan'=>set_value('isi_pesan'),

			
			'aksi'=>site_url('pesan/tambah_aksi')

		);
		$this->load->view('Home',$data);
	}

	function tambah_aksi()
	{

			$pesan=array(
				'username'=>$this->input->post('username'),
				'isi_pesan'=>$this->input->post('isi_pesan')
			
			);

			$test= $this->Pesan_model->tambah_data($pesan);
			if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil mengirim pesan </div></div>");
				redirect(site_url('Home'));
				
			}
			else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username atau Password salah</div></div>");
				$this->load->view('Home');
			}} 
			

			function delete($id_pesan){
			$test = $this->Pesan_model->hapus_data($id_pesan);
			if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil menghapus pesan </div></div>");
				redirect(site_url('Pesan'));}
				
			else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda gagal menghapus pesan</div></div>");
				redirect(site_url('Pesan')); }}
			
	}


 ?>
