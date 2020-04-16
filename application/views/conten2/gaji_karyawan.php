<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gaji Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Gaji</li>
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
		    <form action="<?php echo base_url('admin/payroll/tambah_gaji') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
	          <label for="exampleInputEmail1">Tanggal Penggajian</label>
            <input type="date" class="form-control pull-right col-xs-6"  name="tgl_gaji"><!-- id="datepicker" -->
	      </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Karyawan</label>
            <select class="form-control" name="nama_karyawan">
              <option></option>
              <?php 
              foreach ($karyawan->result() as $k) { ?>
                <option value="<?php echo $k->id_karyawan ?>"><?php echo $k->nama_karyawan; ?></option>
              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Lama Lambur</label>
            <input type="number" class="form-control" name="lembur" required="yes">
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