<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
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
		$data['conten'] 		= 'conten/tambah_data_karyawan';
		$data['title'] 			= 'Tambah Data Pegawai';
		$data['jabatan']		= $this->M_data->get_data('tbl_jabatan');
		$this->load->view('template/conten',$data);
	}

	public function data_pegawai()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/data_karyawan';
		$data['title'] 			= 'Data Pegawai';
		$data['pegawai']		= $this->M_data->join_jabatan();
		$data['jml_pegawai']	= $this->M_data->jumlah_karyawan();
		$this->load->view('template/conten',$data);
	}

	function upload($name, $directory){
		$gbr_name = '';
		$config['upload_path'] = './assets/'.$directory; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '6072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = 'PEGAWAI_'.date('dmYHis'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if($this->upload->do_upload($name)){
        	$fileData = $this->upload->data();
        	$gbr_name = $fileData['file_name'];
        }
        return $gbr_name;
	}

	function tambah_pegawai()
	{
		$date = date("Y-m-d");
		$date2= date('Y-m-d H:i:s');
		$gambar = $this->upload('filefoto','img_karyawan'); //(filefoto)= name pada form yang barada di view, galler adalah folder directory
		$data = array(
					'foto'		 			=>$gambar,
					'nama_karyawan'		 	=> $this->input->post('nama_karyawan'),
					'nik'					=> $this->input->post('nik'),
					'tempat_lahir'	 		=> $this->input->post('tempat_lahir'),
					'tgl_lahir'	 			=> $this->input->post('tgl_lahir'),
					'jabatan'		 		=> $this->input->post('jabatan'),
					'no_telpon'		 		=> $this->input->post('no_telepon'),
					'email'		 			=> $this->input->post('email'),
					'alamat'		 		=> $this->input->post('alamat'),
					'agama'			 		=> $this->input->post('agama'),
					'pendidikan'	 		=> $this->input->post('pendidikan'),
					'asal_sekolah'	 		=> $this->input->post('sekolah'),
					'gol_darah'				=> $this->input->post('darah'),
					'jenis_kelamin'			=> $this->input->post('kelamin'),
					'data_record'			=> $date2,
					'username'				=> $this->input->post('username'),
					'password'				=> md5($this->input->post('username'))
				);
		$table = 'tbl_karyawan';
		$this->M_data->simpan_data($table,$data);//akses model untuk menyimpan ke database
		redirect('admin/pegawai/data_pegawai');

	}

	public function vedit($id){
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/edit_data_karyawan';
		$data['title'] 			= 'Edit Data Pegawai';
		$data['get_data']		= $this->M_data->get_data('tbl_jabatan');
		$data['edit'] 			= $this->M_data->get_data_by_id('tbl_karyawan', array('id_karyawan'=> $id));
		$this->load->view('template/conten',$data);	
	}

	public function edit_data($id){
		$date2= date('Y-m-d H:i:s');
		$table = 'tbl_karyawan';
		$data = array(
					'nama_karyawan'		 	=> $this->input->post('nama_karyawan'),
					'nik'					=> $this->input->post('nik'),
					'tempat_lahir'	 		=> $this->input->post('tempat_lahir'),
					'tgl_lahir'	 			=> $this->input->post('tgl_lahir'),
					'jabatan'		 		=> $this->input->post('jabatan'),
					'no_telpon'		 		=> $this->input->post('no_telepon'),
					'email'		 			=> $this->input->post('email'),
					'alamat'		 		=> $this->input->post('alamat'),
					'agama'			 		=> $this->input->post('agama'),
					'pendidikan'	 		=> $this->input->post('pendidikan'),
					'asal_sekolah'	 		=> $this->input->post('sekolah'),
					'gol_darah'				=> $this->input->post('darah'),
					'jenis_kelamin'			=> $this->input->post('kelamin'),
					'data_record'			=> $date2
		);
		$where = array('id_karyawan'=>$id);
		$this->M_data->update_data($table,$data,$where);
		redirect('admin/pegawai/data_pegawai');
	}

	public function ubah_foto($id){
		if (!empty($_FILES['filefoto']['name'])) {
			$image = $this->M_data->get_data_by_id('tbl_karyawan',array('id_karyawan'=>$id));
			$path = './assets/img_karyawan/';
			//$path2 = './assets/img/gallery/';
			foreach ($image->result() as $row){
					unlink($path.$row->foto);
					//unlink($path2.$row->foto_anggota);
			}

			$this->load->library('upload');
			$nmfile = "PEGAWAI_".date('dmYHis'); //nama file saya beri nama langsung dan diikuti fungsi time
			$config['upload_path'] = './assets/img_karyawan/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['max_size'] = '6000'; //maksimum besar file 3M
			$config['max_width']  = '5000'; //lebar maksimum 5000 px
			$config['max_height']  = '5000'; //tinggi maksimu 5000 px
			$config['file_name'] = $nmfile; //nama yang terupload nantinya

			$this->upload->initialize($config);

			if($_FILES['filefoto']['name'])
			{
					if ($this->upload->do_upload('filefoto'))
					{
							$gbr = $this->upload->data();
							$data = array(
								'foto' =>$gbr['file_name']
							);
							$table = 'tbl_karyawan';
							$where = array('id_karyawan'=>$id);
							$this->M_data->update_data($table,$data,$where); //akses model untuk menyimpan ke database

							$config2['image_library'] = 'gd2';
							$config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
							$config2['new_image'] = './assets/img_karyawan/'; // folder tempat menyimpan hasil resize
							$config2['maintain_ratio'] = TRUE;
							$config2['width'] = 100; //lebar setelah resize menjadi 100 px
							$config2['height'] = 100; //lebar setelah resize menjadi 100 px

							$this->image_lib->clear(); // added this line
							$this->image_lib->initialize($config2); // added this line

							//pesan yang muncul jika resize error dimasukkan pada session flashdata
							if ( !$this->image_lib->resize()){
							$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));
						}
							redirect('admin/pegawai/data_pegawai'); //jika berhasil maka akan ditampilkan view upload
					}else{
							redirect('admin/pegawai/data_pegawai'); //jika gagal maka akan ditampilkan form upload
					}
			}
		}
	}

	public function hapus_data_pegawai($id){
		$image = $this->M_data->get_data_by_id('tbl_karyawan',array('id_karyawan'=>$id));
		$path = './assets/img_karyawan/';
		//$path2 = './assets/img/gallery/';
		foreach ($image->result() as $row){
				unlink($path.$row->foto);
				//unlink($path2.$row->foto_anggota);
		}
		$table = 'tbl_karyawan';
		$where = array('id_karyawan' => $id);
		$this->M_data->hapus_data($table,$where);
		redirect('admin/pegawai/data_pegawai');
	}
}
