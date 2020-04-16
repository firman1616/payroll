<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/user';
		$data['title'] 			= 'Manajemen User';
		$data['user']			= $this->M_data->get_data('tbl_user');
		$this->load->view('template/conten',$data);
	}

	public function tambah_user()
	{
		$table='tbl_user';
		$data= array(	
						'nama' 			=> $this->input->post('nama'),
						'username' 		=> $this->input->post('username'),
						'password' 		=> md5($this->input->post('username')),
						'level' 		=> '1'
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('admin/User');
	}

	public function update_user($id){
		$table='tbl_user';
		$data= array(	
						'nama'	 			=> $this->input->post('nama'),
						'username' 			=> $this->input->post('username'),
						'password'		 	=> md5($this->input->post('password'))
						 );
		$this->M_data->update_data($table,$data,array('id_user' => $id));
		redirect('admin/user');
	}

	public function hapus_user($id){
		$table = 'tbl_user';
		$where = array('id_user' => $id);
		$this->M_data->hapus_data($table,$where);
		redirect('admin/User');
	}
}
