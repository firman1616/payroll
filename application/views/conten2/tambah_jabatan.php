<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jabatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Jabatan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="col-md-12">
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
		    <form action="<?php echo base_url('admin/Jabatan/tambah_jabatan') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
	          <label for="exampleInputEmail1">Nama Jabatan</label>
	          <input type="text" class="form-control" placeholder="Nama Jabatan" required="yes" name="nama_jabatan">
	      </div>
	      <div class="form-group">
	          <label for="exampleInputEmail1">Gaji Pokok</label>
	          <input type="number" class="form-control" placeholder="Rp" name="gaji_pokok" required="yes">
	      </div>
		    <div class="form-group">
	          <label for="exampleInputEmail1">Tunjangan kesehatan</label>
	          <input type="number" class="form-control" placeholder="Rp" name="tunjangan_kesehatan" required="yes">
	      </div>
		    <div class="form-group">
	          <label for="exampleInputEmail1">Dana Pensiun</label>
	          <input type="number" class="form-control" placeholder="Rp" name="dana_pensiun" required="yes">
	      </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
		  </form>
      </div>
        <!-- /.box-body -->        
      </div>

  </div>      

  </div>
      <!-- /.box -->
  
    </section>
    <!-- /.content -->
  </div>
