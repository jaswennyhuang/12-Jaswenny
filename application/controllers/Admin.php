<?php 
class Admin extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		
		$this->load->model('Admin_model');

		}
	
		function edit($username){
			$Admin=$this->Admin_model->ambil_data_id($username);

			$data=array(
				'username'=>set_value('username',$Admin->username),
				'password'=>set_value('password',$Admin->password)
			);

			$this->load->view('Edit_admin',$data);
		}


		function edit_aksi(){
		
		$Admin_baru=array(
				'password'=>$this->input->post('password')
			);
		$username=$this->input->post('username');
		
		$test=$this->Admin_model->edit_data($username,$Admin_baru);

		if ($test==1) {
				$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda berhasil
				melakukan edit data admin </div></div>");
				redirect(site_url('Login/back2'));}
				
		else{
				$this->session->set_flashdata('gagal', "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda gagal melakukan edit data admin</div></div>");
				redirect(site_url('Login/back2'));

		}}

	}

 ?>
