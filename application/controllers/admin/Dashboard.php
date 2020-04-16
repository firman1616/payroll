<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		$data['conten'] 		= 'conten/dashboard';
		$data['title'] 			= 'Dashboard';
		$data['jml_pegawai']	= $this->M_data->jumlah_karyawan();
		$this->load->view('template/conten',$data);
	}
}
