<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Manajemen
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> | Tambah</button>
          <br><br>
        	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $x=1;
                $no=1;
                foreach ($user->result() as $row) { ?>
                <tr>
                  <td><?= $x++; ?></td>
                  <td><?= $row->nama;?></td>
                  <td><?= $row->username; ?></td>
                  <td><?= $row->password; ?></td>
                  <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-defaultEdit<?php echo $no++; ?>"><i class="fa fa-edit"></i></button>
                    <a href="<?php echo base_url('admin/user/hapus_user/'.$row->id_user) ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Data User Akan dihapus?')"><i class="fa fa-trash"></i></button></a>
                  </td>
                </tr>
                <?php } ?>
              </table>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="<?php echo base_url('admin/user/tambah_user') ?>">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah User</h4>
              </div>
              <div class="modal-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama User</label>
                  <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username">
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
<?php 
$y=1;
foreach ($user->result() as $row) { 

?>
  
<div class="modal fade" id="modal-defaultEdit<?php echo $y++; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="<?php echo base_url('admin/user/update_user/'.$row->id_user) ?>">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit User</h4>
              </div>
              <div class="modal-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama User</label>
                  <input type="text" class="form-control" name="nama" readonly="yes" value="<?= $row->nama; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username" value="<?= $row->username; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Password Baru">
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
<?php $no++;} ?>