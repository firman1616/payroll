 <?php 
 foreach ($edit->result() as $row) {
  $id = $row->id_karyawan;
	$nama = $row->nama_karyawan;
	$nik = $row->nik;
	$kelamin = $row->jenis_kelamin;
	$tempat_lahir = $row->tempat_lahir;
	$tgl_lahir = $row->tgl_lahir;
	$jabatan = $row->jabatan;
	$telpon = $row->no_telpon;
	$email = $row->email;
	$agama = $row->agama;
	$pendidikan = $row->pendidikan;
	$sekolah = $row->asal_sekolah;
	$darah = $row->gol_darah;
	$alamat = $row->alamat;
	$foto = $row->foto;
 }?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Pegawai
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<form action="<?php echo base_url('admin/Pegawai/edit_data/'.$id) ?>" method="post" enctype="multipart/form-data">
      <!-- Default box -->
      <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="form-group">
	          <label for="exampleInputEmail1">Nama Lengkap Karyawan</label>
	          <input type="text" class="form-control" placeholder="Nama Karyawan" required="yes" name="nama_karyawan" value="<?php echo $nama ?>">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">NIK</label>
	          <input type="number" class="form-control" placeholder="NIK" name="nik" required="yes" value="<?php echo $nik ?>">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Jenis Kelamin</label>
	          <select name="kelamin" class="form-control" required="yes">
	          	<option <?php if ($kelamin == "") {
                  echo "";} ?>></option>
                <option <?php if ($kelamin == "laki-laki") {
                  echo "selected";} ?> value="laki-laki">Laki-Laki</option>
                <option <?php if ($kelamin == "wanita") {
                  echo "selected";} ?> value="wanita">Wanita</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Tempat Lahir</label>
	          <input type="tempat_lahir" class="form-control" name="tempat_lahir" required="yes" value="<?php echo $tempat_lahir ?>">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Tanggal Lahir</label>
	          <input type="date" class="form-control" name="tgl_lahir" required="yes" value="<?php echo $tgl_lahir ?>">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Jabatan Karyawan</label>
	          <select class="form-control" name="jabatan" required="yes">
	          	<option value="">== Pilih Jabatan ==</option>
              <?php
              foreach ($get_data->result() as $row) { ?>
              <option <?php if ($jabatan == $row->id_jabatan) { echo "selected";
              };?> value="<?php echo $row->id_jabatan; ?>"><?php echo $row->nama_jabatan; ?></option>
              <?php } ?>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">No. Telphone</label>
	          <input type="number" class="form-control" name="no_telepon" required="yes" value="<?php echo $telpon ?>">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Email</label>
	          <input type="email" class="form-control" name="email" required="yes" value="<?php echo $email ?>">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Agama</label>
	          <select name="agama" class="form-control" required="yes">
	          	<option value="">== Piliah Satu ==</option>
	          	<option <?php if ($agama == "") {
                  echo "";} ?>></option>
                <option <?php if ($agama == "islam") {
                  echo "selected";} ?> value="islam">Islam</option>
                <option <?php if ($agama == "kristen") {
                  echo "selected";} ?> value="kristen">Kristen</option>
                <option <?php if ($agama == "hindu") {
                  echo "selected";} ?> value="hindu">Hindu</option>
                <option <?php if ($agama == "budha") {
                  echo "selected";} ?> value="budha">Budha</option>
                <option <?php if ($agama == "konghucu") {
                  echo "selected";} ?> value="konghucu">KongHucu</option>
	          </select>
	      </div>
        </div>
        <!-- /.box-body -->        
      </div>

  </div>

  <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<div class="form-group">
	          <label for="exampleInputEmail1">Pendidikan terakhir</label>
	          <select name="pendidikan" class="form-control" required="yes">
	          	<option value="">== Piliah Satu ==</option>
	          	<option <?php if ($pendidikan == "") {
                  echo "";} ?>></option>
                <option <?php if ($pendidikan == "SD") {
                  echo "selected";} ?> value="SD">SD</option>
                <option <?php if ($pendidikan == "SMP") {
                  echo "selected";} ?> value="SMP">SMP</option>
                <option <?php if ($pendidikan == "SMA") {
                  echo "selected";} ?> value="SMA">SMA</option>
                <option <?php if ($pendidikan == "SMK") {
                  echo "selected";} ?> value="SMK">SMK</option>
                <option <?php if ($pendidikan == "D3") {
                  echo "selected";} ?> value="D3">D3</option>
                <option <?php if ($pendidikan == "D4") {
                  echo "selected";} ?> value="D4">D4</option>
                <option <?php if ($pendidikan == "S1") {
                  echo "selected";} ?> value="S1">S1</option>
                <option <?php if ($pendidikan == "S2") {
                  echo "selected";} ?> value="S2">S2</option>
                <option <?php if ($pendidikan == "S3") {
                  echo "selected";} ?> value="S3">S3</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Asal Sekolah</label>
	          <input type="text" class="form-control" name="sekolah" required="yes" value="<?php echo$sekolah ?>">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Golongan Darah</label>
	          <select name="darah" class="form-control" required="yes">
	          	<option value="">== Piliah Satu ==</option>
	          	<option <?php if ($darah == "") {
                  echo "";} ?>></option>
                <option <?php if ($darah == "a") {
                  echo "selected";} ?> value="a">A</option>
                <option <?php if ($darah == "b") {
                  echo "selected";} ?> value="b">B</option>
                <option <?php if ($darah == "ab") {
                  echo "selected";} ?> value="ab">AB</option>
                <option <?php if ($darah == "o") {
                  echo "selected";} ?> value="o">O</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Alamat Pegawai</label>
	          <textarea name="alamat" class="form-control" required="yes"><?php echo $alamat; ?></textarea>
	      </div>
	      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
	      <br>
        </div>
        <!-- /.box-body -->        
      </div>

  </div>
      <!-- /.box -->
  </form>

  <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<form action="<?php echo base_url('admin/Pegawai/ubah_foto/'.$id) ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
	          <label for="exampleInputEmail1">Foto Formal Pegawai</label><br>
	          <?php 
	          if ($foto == "") { ?>
	          	<center><img width="35%" src="<?php echo base_url() ?>assets/img/no_foto.jpg"></center>
	          <?php }else{ ?>
	          	<center><img width="35%" src="<?php echo base_url('assets/img_karyawan/'.$foto) ?>"></center>
	          <?php } ?>
	          <center>3 x 4</center>
	          <input type="file" class="form-control" name="filefoto">
	      </div>
	      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
	  </form>
        </div>
        <!-- /.box-body -->        
      </div>

  </div>
    </section>
    <!-- /.content -->
  </div>
