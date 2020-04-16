<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
			$this->load->library('Pdf');
	 }

	public function index()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/gaji_karyawan';
		$data['title'] 			= 'Payroll';
		$data['karyawan']		= $this->M_data->get_data('tbl_karyawan');
		$this->load->view('template/conten',$data);
	}

	public function tambah_gaji()
	{
		$date = date('Y-m-d H:i:s');
		$table='tbl_gaji';
		$data= array(	
			'tgl_gaji'	 			=> $this->input->post('tgl_gaji'),
			'karyawan'				=> $this->input->post('nama_karyawan'),
			'lama_lembur'		 	=> $this->input->post('lembur'),
			'validasi'				=> $date
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('admin/Payroll');
	}

	public function data_gaji()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/data_gaji';
		$data['title'] 			= 'Payroll Data';
		$data['gaji']			= $this->M_data->join_gaji(); /*iki gak atek i kei result kan utowo row ngunu, oiii maasssss*/
		$this->load->view('template/conten',$data);
	}


	public function cetak_slip($id) /*iki control cetak*/
	{
		$data['name'] = $this->session->userdata('nama');
		$data['conten'] = 'conten/cetak_slip_gaji';
		$data['title'] = 'Cetak Slip Gaji Karyawan';
		//$data['cetak'] = $this->M_data->cetak_slip($id);
		$data['pay']   = $this->M_data->cetak_slip($id);
		/*$data['id_wp'] = $this->M_data->wajib_pajak();*/
		$this->load->view('conten/cetak_slip_gaji',$data);
	}

	public function hapus_gaji($id){
		$table = 'tbl_gaji';
		$where = array('id_gaji' => $id);
		$this->M_data->hapus_data($table,$where);
		redirect('admin/Payroll');
	}

}
