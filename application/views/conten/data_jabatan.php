<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jabatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Jabatan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Jabatan</h3>

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
                  <th>Nama Jabatan</th>
                  <th>Gaji Pokok</th>
                  <th>Tunjangan Kesehatan</th>
                  <th>Dana Pensiun</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $x=1;
                $no=1;
                foreach ($jabatan->result() as $row) {?>
                <tr>
                  <td><?php echo $x++; ?></td>
                  <td><?php echo $row->nama_jabatan; ?></td>
                  <td>Rp. <?php echo number_format($row->gaji_pokok); ?>,-</td>
                  <td>Rp. <?php echo number_format($row->tunjangan_kesehatan); ?>,-</td>
                  <td>Rp. <?php echo number_format($row->dana_pensiun) ?>,-</td>
                  <td>
                  	<button class="btn btn-warning" title="Edit Data Pegawai" data-toggle="modal" data-target="#modal-default<?php echo $no++; ?>"><i class="fa fa-edit"></i></button>
                  	<a href="<?php echo base_url('amdin/Jabatan/hapus_jabatan/'.$row->id_jabatan) ?>"><button class="btn btn-danger" title="Hapus Data Pegawai" onclick="return confirm('Data Akan dihapus?')"><i class="fa fa-trash"></i></button></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

<?php 
$y=1;
foreach ($jabatan->result() as $row) {?>

<div class="modal fade" id="modal-default<?php echo $y++ ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="<?php echo base_url('admin/jabatan/update_jabatan/'.$row->id_jabatan) ?>">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
              </div>
              <div class="modal-body">
                
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Jabatan</label>
            <input type="text" class="form-control" placeholder="Nama Jabatan" required="yes" name="nama_jabatan" value="<?php echo $row->nama_jabatan; ?>">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Gaji Pokok</label>
              <input type="number" class="form-control" placeholder="Rp" name="gaji_pokok" required="yes" value="<?php echo $row->gaji_pokok; ?>">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Tunjangan kesehatan</label>
              <input type="number" class="form-control" placeholder="Rp" name="tunjangan_kesehatan" required="yes" value="<?php echo $row->tunjangan_kesehatan; ?>">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Dana Pensiun</label>
              <input type="number" class="form-control" placeholder="Rp" name="dana_pensiun" required="yes" value="<?php echo $row->dana_pensiun; ?>">
          </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<?php echo $no++; } ?>