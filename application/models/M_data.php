<?php
class M_data extends CI_Model {
	function __construct(){
        parent :: __construct();
    }
    function get_data($table){
  		return $this->db->get($table);
  	}
		function get_data_by_id($table,$where) {
          return $this->db->get_where($table,$where);
  	}
		function simpan_data($table,$data){
    	$this->db->insert($table,$data);
    }
		function update_data($table,$data,$where){
    	$this->db->update($table,$data,$where);
    }
    function hapus_data($table,$where){
    	$this->db->delete($table,$where);
    }
    function cek_login($table,$where){    
    return $this->db->get_where($table,$where);
    }
    
    public function upload_data_jurnal($filename){
          ini_set('memory_limit', '-1');
          $inputFileName = './assets/'.$filename;
          try {
          $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
          } catch(Exception $e) {
          die('Error loading file :' . $e->getMessage());
          }

          $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          $numRows = count($worksheet);

          for ($i=2; $i < ($numRows+1) ; $i++) {

            $ins = array(
                "kode_jurnal"     => $worksheet[$i]["B"],
                "isbn_jurnal"     => $worksheet[$i]["C"],
                "judul_jurnal"    => $worksheet[$i]["D"],
                "penerbit_jurnal" => $worksheet[$i]["E"],
                "tahun_jurnal"    => $worksheet[$i]["F"]
              );
            $this->db->insert('tbl_jurnal',$ins);
          }
    }
   
   function jumlah_karyawan(){
        $data = $this->db->query("SELECT * FROM tbl_karyawan");
        return $data->num_rows();
    }

    function cari($id){
        $query= $this->db->get_where('objek_pajak_bpn', array('nop'=>$id));
        return $query;
    }

/*iki model gawe join gaji seng*/
    public function join_gaji()
    {
      /*$data = $this->db->query("SELECT 
                                  tbl_karyawan.nama_karyawan, validasi, tgl_gaji, lama_lembur, nama_jabatan, gaji_pokok, tunjangan_kesehatan, dana_pensiun, tunjangan_lembur, no_telpon, alamat, id_karyawan
                                FROM 
                                  tbl_gaji
                                  LEFT JOIN  tbl_karyawan ON tbl_karyawan.id_karyawan = tbl_gaji.nama_karyawan
                                  LEFT JOIN tbl_jabatan ON tbl_karyawan.jabatan = tbl_jabatan.id_jabatan");*/
      $data = $this->db->query("SELECT
                                a.id_karyawan,
                                a.nama_karyawan,
                                a.alamat,
                                a.no_telpon,
                                a.jabatan,
                                b.id_jabatan,
                                b.nama_jabatan,
                                b.gaji_pokok,
                                b.tunjangan_kesehatan,
                                b.dana_pensiun,
                                b.tunjangan_lembur,
                                c.tgl_gaji,
                                c.karyawan,
                                c.lama_lembur,
                                c.validasi
                              FROM
                                tbl_karyawan AS a
                                RIGHT JOIN tbl_jabatan AS b ON a.jabatan = b.id_jabatan
                                RIGHT JOIN tbl_gaji AS c ON a.id_karyawan = c.karyawan");
      return $data;
    } //iki model e seng bener mas

    public function cetak_slip($id)
    {
      $data = $this->db->query("SELECT
                                a.id_karyawan,
                                a.nama_karyawan,
                                a.alamat,
                                a.no_telpon,
                                a.jabatan,
                                b.id_jabatan,
                                b.nama_jabatan,
                                b.gaji_pokok,
                                b.tunjangan_kesehatan,
                                b.dana_pensiun,
                                b.tunjangan_lembur,
                                c.id_gaji,
                                c.tgl_gaji,
                                c.karyawan,
                                c.lama_lembur,
                                c.validasi
                              FROM
                                tbl_karyawan AS a
                                RIGHT JOIN tbl_jabatan AS b ON a.jabatan = b.id_jabatan
                                RIGHT JOIN tbl_gaji AS c ON a.id_karyawan = c.karyawan where id_karyawan = '$id'");
      return $data;
    }

    function gaji_karyawan_bulanini($nama)
    {
      $tgl_sekarang = date('Y-m');
      $data = $this->db->query("SELECT
                                a.id_karyawan,
                                a.nama_karyawan,
                                a.alamat,
                                a.no_telpon,
                                a.jabatan,
                                b.id_jabatan,
                                b.nama_jabatan,
                                b.gaji_pokok,
                                b.tunjangan_kesehatan,
                                b.dana_pensiun,
                                b.tunjangan_lembur,
                                c.id_gaji,
                                c.tgl_gaji,
                                c.karyawan,
                                c.lama_lembur,
                                c.validasi
                              FROM
                                tbl_karyawan AS a
                                RIGHT JOIN tbl_jabatan AS b ON a.jabatan = b.id_jabatan
                                RIGHT JOIN tbl_gaji AS c ON a.id_karyawan = c.karyawan 
                                WHERE a.nama_karyawan = '$nama' AND c.tgl_gaji LIKE '%$tgl_sekarang%'");
      return $data;
    }
    

    public function join_jabatan()
    {
      $this->db->select('*');
      $this->db->from('tbl_karyawan');
      $this->db->join('tbl_jabatan', 'tbl_karyawan.jabatan = tbl_jabatan.id_jabatan');
      $query = $this->db->get();
      return $query;
    }
}
