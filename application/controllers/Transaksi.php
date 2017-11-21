<?php 
class Transaksi extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		
		$this->load->model('Transaksi_model');
	}

	function index()
	{

		$data['transaksi'] = $this->Transaksi_model->ambil_data();
			
		$this->load->view('List_transaksi',$data);
		
	}

	function transaksi_sisi_member($username)
	{

		$data['transaksi'] = $this->Transaksi_model->ambil_data_username($username);
			
		$this->load->view('List_transaksi_member',$data);
		
	}

	function tambah(){
		$data=array(
			
			'username'=>set_value('username'),
			'id_workshop'=>set_value('id_workshop'),
			'bukti_transfer'=>set_value('bukti_transfer'),
			'status'=>set_value('status'),
			'tgl_transaksi'=>set_value('tgl_transaksi'),

			'button'=>"tambah",
			'aksi'=>site_url('Transaksi/tambah_aksi')

		);
		$this->load->view('Tambah_transaksi',$data);
	}
	function tambah_aksi()
	{
		
		$config['upload_path'] = './assets/uploads/';

		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3072;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$transaksi=array(
				'username'=>$this->input->post('username'),
				'id_workshop'=>$this->input->post('id_workshop'),
				'bukti_transfer'=>$this->input->post('bukti_transfer')
			
			
			);
			$test= $this->Transaksi_model->tambah_data($transaksi);

			if ($test==1) {
				redirect(site_url('Transaksi/transaksi_sisi_member/'.$transaksi['username']));
			}}


			function delete($id_transaksi){
			$test = $this->Transaksi_model->hapus_data($id_transaksi);
			redirect(site_url('Transaksi'));

	}


		function edit($id_transaksi){

			$transaksi=$this->Transaksi_model->ambil_data_id($id_transaksi);

			$data=array(
				'id_transaksi'=>set_value('id_transaksi',$transaksi->id_transaksi),
				'username'=>set_value('username',$transaksi->username),
				'id_workshop'=>set_value('id_workshop',$transaksi->id_workshop),
				'bukti_transfer'=>set_value('bukti_transfer',$transaksi->bukti_transfer),
				'status'=>set_value('status',$transaksi->status),
				'tgl_transaksi'=>set_value('tgl_transaksi',$transaksi->tgl_transaksi),
				
			);

			$this->load->view('Edit_transaksi',$data);
		}

		function edit_aksi(){
		

			$transaksi_baru=array(
				'username'=>$this->input->post('username'),
				'id_workshop'=>$this->input->post('id_workshop'),
				//'bukti_transfer'=>$this->input->post('bukti_transfer'),
				'status'=>$this->input->post('status'),
				'tgl_transaksi'=>$this->input->post('tgl_transaksi'),
				

			);
		$id_transaksi=$this->input->post('id_transaksi'); 
		
		$test = $this->Transaksi_model->edit_data($id_transaksi,$transaksi_baru);

		if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil mengedit data transaksi </div></div>");
				redirect(site_url('Transaksi'));}
				
			
		else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda gagal mengedit data transaksi </div></div>");
				redirect(site_url('Transaksi'));

		}}
		

			function edit_sisi_member($id_transaksi){

			$transaksi=$this->Transaksi_model->ambil_data_id($id_transaksi);


			$data=array(
				'username'=>set_value('username',$transaksi->username),
				'id_transaksi'=>set_value('id_transaksi',$transaksi->id_transaksi),
				'bukti_transfer'=>set_value('bukti_transfer',$transaksi->bukti_transfer)
			
			);

			$this->load->view('Edit_transaksi_member',$data);
		}

		
		function edit_aksi_sisi_member(){
		
		$nmfile = "Buktitransfer_".time(); //nama file + fungsi time
		
		$config['upload_path'] = './assets/buktitransfer/';

		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nmfile;

        // load library upload
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('bukti_transfer')) {
			$error = $this->upload->display_errors();
			print_r($error);
		} else {
			$result = $this->upload->data(); 

			$data=array(
				
					'bukti_transfer'=>$result['file_name'],

			);
		$id_transaksi=$this->input->post('id_transaksi'); 
		$username=$this->input->post('username');// meskipun tidak ada di form, namun sudah ada karena kita men
		//menggunakan tipe data hidden
		//$this->Mahasiswa_model->edit_data($id,$datamahasiswabaru);
		$this->Transaksi_model->edit_data($id_transaksi,$data);
			
			redirect(site_url('Transaksi/transaksi_sisi_member/'.$username));
		

		}}

function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->Transaksi_model->ambil_data_id($id);
            
            $gambar = $fileInfo->bukti_transfer;
            //file path
            $file = 'assets/buktitransfer/'.$gambar;            
            //download file from directory
            force_download($file, NULL);
        }
    }

	}


 ?>
