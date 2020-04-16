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
    	<form action="<?php echo base_url('admin/pegawai/tambah_pegawai') ?>" method="post" enctype="multipart/form-data">
      <!-- Default box -->
      <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data</h3>

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
	          <input type="text" class="form-control" placeholder="Nama Karyawan" required="yes" name="nama_karyawan">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">NIK</label>
	          <input type="number" class="form-control" placeholder="NIK" name="nik" required="yes">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Jenis Kelamin</label>
	          <select name="kelamin" class="form-control" required="yes">
	          	<option value="">== Piliah Satu ==</option>
	          	<option value="laki-laki">Laki - Laki</option>
	          	<option value="wanita">Wanita</option>
	          </select>
	      </div>

	      <div class="form-group">
	          <label for="exampleInputEmail1">Tempat Lahir</label>
	          <input type="tempat_lahir" class="form-control" name="tempat_lahir" required="yes">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Tanggal Lahir</label>
	          <input type="date" class="form-control pull-right" required="yes" name="tgl_lahir">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Jabatan Karyawan</label>
	          <select class="form-control" name="jabatan" required="yes">
	          	<option value="">== Pilih Jabatan ==</option>
	          	<?php foreach ($jabatan->result() as $row) {?>
	          	<option value="<?php echo $row->id_jabatan ?>"><?php echo $row->nama_jabatan; ?></option>
	          	<?php } ?>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">No. Telphone</label>
	          <input type="number" class="form-control" name="no_telepon" required="yes">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Email</label>
	          <input type="email" class="form-control" name="email" required="yes">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Agama</label>
	          <select name="agama" class="form-control" required="yes">
	          	<option value="">== Piliah Satu ==</option>
	          	<option value="islam">Islam</option>
	          	<option value="kristen">Kristen</option>
	          	<option value="hindu">Hindu</option>
	          	<option value="budha">Budha</option>
	          	<option value="konghucu">KongHucu</option>
	          </select>
	      </div>
        </div>
        <!-- /.box-body -->        
      </div>

  </div>

  <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data</h3>

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
	          	<option value="SD">SD</option>
	          	<option value="SMP">SMP</option>
	          	<option value="SMA">SMA</option>
	          	<option value="SMK">SMK</option>
	          	<option value="D3">D3</option>
	          	<option value="D4">D4</option>
	          	<option value="S1">S1</option>
	          	<option value="S2">S2</option>
	          	<option value="S3">S3</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Asal Sekolah</label>
	          <input type="sekolah" class="form-control" name="sekolah" required="yes">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Golongan Darah</label>
	          <select name="darah" class="form-control" required="yes">
	          	<option value="">== Piliah Satu ==</option>
	          	<option value="a">A</option>
	          	<option value="b">B</option>
	          	<option value="ab">AB</option>
	          	<option value="o">O</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Alamat Pegawai</label>
	          <textarea name="alamat" class="form-control" required="yes"></textarea>
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Username</label>
	          <input type="text" class="form-control" name="username" required="yes">
	      </div>
          <div class="form-group">
	          <label for="exampleInputEmail1">Foto Formal Pegawai</label><br>
	          <center><img width="35%" src="<?php echo base_url() ?>assets/img/no_foto.jpg"></center>
	          <center>3 x 4</center>
	          <input type="file" class="form-control" name="filefoto">
	          <small>Max Size 200kb</small>
	      </div>
	      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	      <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
        </div>
        <!-- /.box-body -->        
      </div>

  </div>
      <!-- /.box -->
  </form>
    </section>
    <!-- /.content -->
  </div>
