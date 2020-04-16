<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 2 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten2/dashboard2';
		$data['title'] 			= 'Dashboard';
		$data['gaji_bulanan']	= $this->M_data->gaji_karyawan_bulanini($data['name']);
		$this->load->view('template2/conten',$data);
	}
}
