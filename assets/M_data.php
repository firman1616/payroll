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
    function get_category(){
        $query = $this->db->get('master_usaha');
        return $query;  
    }
 
    function get_nama_npwpd($id_master_usaha){
        $query = $this->db->get_where('npwpd', array('kd_usaha' => $id_master_usaha));
        return $query;
    }

    function cari($id){
        $query= $this->db->get_where('npwpd', array('nama_wp'=>$id, 'level' => 2));
        return $query;
    }

    public function join_data_status()
    {
     return $this->db->query('SELECT * FROM npwpd ORDER BY id_wp DESC');
    }


    public function daftar_transaksi()
    {
     return $this->db->query('SELECT * FROM sptpd ORDER BY id_sptpd DESC');
    }

    function sort_all_courses_desc($name)
    {
        $this->db->select('*');
        $this->db->where('nama_wp',$name);
        $this->db->order_by("id_sptpd","desc");
        $this->db->from('sptpd');
        $query=$this->db->get();
        return $query;
    }

    function cetak_sptpd($id){
      return $this->db->query("SELECT * FROM sptpd WHERE id_sptpd = $id ORDER BY id_sptpd ASC");
    }

    function nama_wp() //f4ngsi iki mek di gawe njukuk nama tok mas dan di grub nama e , dadi seng nama e lebih dari 1 , muncul e 1
    {
        return $this->db->query("SELECT nama_wp, npwpd, alamat_wp FROM sptpd GROUP BY nama_wp;");
        /*SELECT nama_wp FROM sptpd GROUP BY nama_wp;*/
    }

    function detail_rekap($nama)
    {
        return $this->db->query("SELECT nama_wp FROM sptpd WHERE nama_wp ='$nama' GROUP BY nama_wp;");
    }

    function nama_wp_detail($nama) //f4ngsi iki mek di gawe njukuk nama tok mas dan di grub nama e , dadi seng nama e lebih dari 1 , muncul e 1
    {
        return $this->db->query("SELECT nama_wp FROM sptpd WHERE nama_wp='$nama' GROUP BY nama_wp;");
    }

    function jml_pajak($nama)
    {
        return $this->db->query("SELECT SUM(jml_dpp) AS jumlah FROM sptpd WHERE nama_wp='$nama' GROUP BY nama_wp;");
    }

    function jumlah_transaksi_opd($name){
        $tgl_sekarang = date('Y-m');
        $data = $this->db->query("SELECT SUM(jml_dpp) AS jumlah FROM sptpd WHERE tgl_transaksi LIKE'%$tgl_sekarang%' AND nama_opd = '$name';");
        return $data;
    }

    function rekap_transaksi_taunan($nama){
        $tgl_sekarang = date('Y-m');
        $data = $this->db->query("SELECT SUM(jml_dpp) AS jumlah FROM sptpd WHERE tgl_transaksi LIKE'%$tgl_sekarang%' AND nama_wp = '$nama';");
        return $data;
    }

}