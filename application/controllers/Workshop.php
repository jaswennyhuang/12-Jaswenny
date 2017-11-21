<?php 
class Workshop extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		
		$this->load->model('Workshop_model');
	}

	function index()
	{

		$data['workshop'] = $this->Workshop_model->ambil_data();
		
		$this->load->view('List_workshop',$data);
		
	}

	function workshop_aktif()
	{
		
		$data['workshop'] = $this->Workshop_model->ambil_data2();
		
		$this->load->view('Tambah_transaksi',$data);
		
	}

	function tambah(){
		$data=array(
			'nama_workshop'=>set_value('nama_workshop'),
			'deskripsi'=>set_value('deskripsi'),
			'tempat'=>set_value('tempat'),
			'tanggal'=>set_value('tanggal'),
			'waktu'=>set_value('waktu'),
			'harga'=>set_value('harga'),

			'button'=>"tambah",
			'aksi'=>site_url('Workshop/tambah_aksi')

		);
		$this->load->view('Tambah_workshop',$data);
	}
	function tambah_aksi()
	{


			$workshop=array(
				'nama_workshop'=>$this->input->post('nama_workshop'),
				'deskripsi'=>$this->input->post('deskripsi'),
				//'gambar_barang'=>$result['file_name'],
				'tempat'=>$this->input->post('tempat'),
				'tanggal'=>$this->input->post('tanggal'),
					'waktu'=>$this->input->post('waktu'),
						'harga'=>$this->input->post('harga')

			);
			$test= $this->Workshop_model->tambah_data($workshop);
				if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil menambah data workshop </div></div>");
				redirect(site_url('Workshop'));}
				
			
			else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda gagal menambah data workshop </div></div>");
				redirect(site_url('Workshop'));

		}}

		
			function delete($id_workshop){
			$test = $this->Workshop_model->hapus_data($id_workshop);
			if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil menghapus data workshop </div></div>");
				redirect(site_url('Workshop'));}
				
			else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda gagal menghapus data workshop </div></div>");
				redirect(site_url('Workshop'));

		}}


		function edit($id_workshop){

			$workshop=$this->Workshop_model->ambil_data_id($id_workshop);


			$data=array(
				'id_workshop'=>set_value('id_workshop',$workshop->id_workshop),
				'nama_workshop'=>set_value('nama_workshop',$workshop->nama_workshop),
				'deskripsi'=>set_value('deskripsi',$workshop->deskripsi),
				'tempat'=>set_value('tempat',$workshop->tempat),
				'tanggal'=>set_value('tanggal',$workshop->tanggal),
				'waktu'=>set_value('waktu',$workshop->waktu),
				'harga'=>set_value('harga',$workshop->harga)

				
				

			);

			$this->load->view('Edit_workshop',$data);
		}
		function edit_aksi(){
	

			$workshop_baru=array(
				'nama_workshop'=>$this->input->post('nama_workshop'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'tempat'=>$this->input->post('tempat'),
				'tanggal'=>$this->input->post('tanggal'),
				'waktu'=>$this->input->post('waktu'),
				'harga'=>$this->input->post('harga')

			);
		$id_workshop=$this->input->post('id_workshop'); 
		
		$test=$this->Workshop_model->edit_data($id_workshop,$workshop_baru);

		if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil mengedit data workshop</div></div>");
				redirect(site_url('Workshop'));}
				
			
			else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda gagal mengedit data workshop</div></div>");
				redirect(site_url('Workshop'));
		

		}}}


 ?>
