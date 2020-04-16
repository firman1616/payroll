<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
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
		$data['conten'] 		= 'conten/tambah_jabatan';
		$data['title'] 			= 'Tambah Data Jabatan';
		$this->load->view('template/conten',$data);
	}

	public function data_jabatan()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/data_jabatan';
		$data['title'] 			= 'Data Jabatan';
		$data['jabatan']		= $this->M_data->get_data('tbl_jabatan');
		$this->load->view('template/conten',$data);
	}

	public function tambah_jabatan()
	{
		$table='tbl_jabatan';
		$data= array(	'nama_jabatan' 			=> $this->input->post('nama_jabatan'),
						'gaji_pokok' 			=> $this->input->post('gaji_pokok'),
						'tunjangan_kesehatan' 	=> $this->input->post('tunjangan_kesehatan'),
						'dana_pensiun' 			=> $this->input->post('dana_pensiun')
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('admin/jabatan');
	}

	public function update_jabatan($id){
		$table='tbl_jabatan';
		$data= array(	'nama_jabatan' 			=> $this->input->post('nama_jabatan'),
						'gaji_pokok' 			=> $this->input->post('gaji_pokok'),
						'tunjangan_kesehatan' 	=> $this->input->post('tunjangan_kesehatan'),
						'dana_pensiun'		 	=> $this->input->post('dana_pensiun')
						 );
		$this->M_data->update_data($table,$data,array('id_jabatan' => $id));
		redirect('admin/Jabatan/data_jabatan');
	}

	public function hapus_jabatan($id){
		$table = 'tbl_jabatan';
		$where = array('id_jabatan' => $id);
		$this->M_data->hapus_data($table,$where);
		redirect('admin/jabatan/data_jabatan');
	}
}
