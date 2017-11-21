<?php 
class member extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		
		$this->load->model('Member_model');
	}

	function index()
	{

		$data['member'] = $this->Member_model->ambil_data();
		
		$this->load->view('List_member',$data);
		//print_r($data);
		//print_r($data);
	}
	function tambah(){
		$data=array(
			'nama'=>set_value('nama'),
			'alamat'=>set_value('alamat'),
			'nohp'=>set_value('nohp'),
			'username'=>set_value('username'),
			'password'=>set_value('password'),
			
			'button'=>"tambah",
			'aksi'=>site_url('member/tambah_aksi')

		);
		$this->load->view('Register',$data);
	}
	function tambah_aksi()
	{
			$member=array(
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				//'gambar_barang'=>$result['file_name'],
				'nohp'=>$this->input->post('nohp'),
				'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password')
						

			);
			$test= $this->Member_model->tambah_data($member);
			if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">You have registered successfully, Please LOGIN</div></div>");
				redirect(site_url('login'));
				
	# code...
			}
			else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username or Password is invalid</div></div>");
				$this->load->view('Register');
			}} 
			

			function delete($username){
			$test = $this->Member_model->hapus_data($username);
			//redirect(site_url('Member'));

			if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil menghapus member</div></div>");
				redirect(site_url('Member'));}
				
	# code...
			
			else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda gagal menghapus member</div></div>");
				redirect(site_url('Member')); }}
			

		


		function edit($username){

			$member=$this->Member_model->ambil_data_id($username);

			$data=array(
				'nama'=>set_value('nama',$member->nama),
				'alamat'=>set_value('alamat',$member->alamat),
				'nohp'=>set_value('nohp',$member->nohp),
				'username'=>set_value('username',$member->username),
				'password'=>set_value('password',$member->password),
				
				'button'=>"edit",
				'aksi'=>site_url('Member/edit_aksi'),

			);

			$this->load->view('Edit_member',$data);
		}
		function edit_aksi(){
		

		$member_baru=array(
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'nohp'=>$this->input->post('nohp'),
				'password'=>$this->input->post('password')
				

			);
		$username=$this->input->post('username'); 
		
		$test = $this->Member_model->edit_data($username,$member_baru);
		
		redirect('Login/back');

		}

		}


 ?>
