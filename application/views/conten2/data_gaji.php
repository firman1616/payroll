<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Gaji
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Gaji</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Payroll List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
        	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama karyawan</th>
                  <th>Tanggal Validasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $x = 1;
                //die(var_dump($gaji->result()));
                foreach ($gaji->result() as $row) { 
                  //die(var_dump($row->nama_karyawan));?>
                <tr>
                  <td><?php echo $x++; ?></td>
                  <td><?php echo $row->nama_karyawan; ?></td>
                  <td><?php echo $row->validasi; ?></td>
                  <td>
                  	<a href="<?php echo base_url('admin/Payroll/cetak_slip/'.$row->id_karyawan) ?>" target=_new><button class="btn btn-primary" title="Cetak Slip"><i class="fa fa-print"></i></button></a>
                  	<!-- <button class="btn btn-warning" title="Edit Slip"><i class="fa fa-edit"></i></button> -->
                  	<!-- <a href="<?php echo base_url('Payroll/hapus_gaji/'.$row->id_gaji) ?>"><button class="btn btn-danger" title="Hapus Slip"><i class="fa fa-trash"></i></button></a> -->
                  </td>
                </tr>
                <?php } ?>
              </table>

        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>