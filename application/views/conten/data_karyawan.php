<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Karyawan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Karyawan</h3>

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
                  <th>Nama Pegawai</th>
                  <th>NIK</th>
                  <th>Pendidikan terakhir</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $x=1;
                $no=1;
                foreach ($pegawai->result() as $row) {?>
                <tr>
                  <td><?php echo $x++; ?></td>
                  <td><?php echo $row->nama_karyawan; ?></td>
                  <td><?php echo $row->nik; ?></td>
                  <td><?php echo $row->pendidikan; ?></td>
                  <td><?php echo $row->nama_jabatan ?></td>
                  <td>
                  	<button class="btn btn-primary" title="Lihat Detail Pegawai" data-toggle="modal" data-target="#modal-success<?php echo $no++; ?>"><i class="fa fa-bookmark"></i></button>
                  	<a href="<?php echo base_url('admin/Pegawai/vedit/'.$row->id_karyawan) ?>"><button class="btn btn-warning" title="Edit Data Pegawai"><i class="fa fa-edit"></i></button></a>
                  	<a href="<?php echo base_url('admin/pegawai/hapus_data_pegawai/'.$row->id_karyawan) ?>"><button class="btn btn-danger" title="Hapus Data Pegawai" onclick="return confirm('Data Akan dihapus?')"><i class="fa fa-trash"></i></button></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Jumlah Data Karyawan <b><?php echo $jml_pegawai; ?></b>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

<?php
$y=1; 
foreach ($pegawai->result() as $row) { ?>

<div class="modal modal-success fade" id="modal-success<?php echo $y++; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Biodata <?php echo $row->nama_karyawan; ?></h4>
              </div>
              <div class="modal-body">
                <table class="table table-bordered">
                <tr>
                  <td width="22%">Nama Karyawan</td>
                  <td><center>:</center></td>
                  <td><?php echo $row->nama_karyawan; ?></td>
                  <td rowspan="5" width="35%"><center>
                    <?php 
                    $foto = $row->foto;
                    if ($foto == "") { ?>
                      <img width="75%" src="<?php echo base_url('assets/img/no_foto.jpg') ?>">
                    <?php }else{ ?>
                      <img width="75%" src="<?php echo base_url('assets/img_karyawan/'.$foto) ?>">
                    <?php }
                    ?>
                  </center>
                  </td>
                </tr>
                <tr>
                  <td width="22%">NIK</td>
                  <td width="5%"><center>:</center></td>
                  <td><?php echo $row->nik; ?></td>
                </tr>
                <tr>
                  <td width="22%">Jenis Kelamin</td>
                  <td width="5%"><center>:</center></td>
                  <td><?php 
                  $kelamin = $row->jenis_kelamin;
                  if ($kelamin == 'laki-laki') {
                    echo "Laki - Laki";
                  }else{
                    echo "Wanita";
                  }
                  ?></td>
                </tr>
                <tr>
                  <td width="22%">Tempat Tanggal Lahir</td>
                  <td width="5%"><center>:</center></td>
                  <td>
                    <?php
                      $tempat= $row->tempat_lahir;
                      $tanggal= $row->tgl_lahir;
                      $tanggal1 = date('d M Y', strtotime($tanggal));
                      if ($tempat == '') {
                        echo "---";
                      } else {
                        echo $tempat;
                      } ?> , <?php
                      if ($tanggal == '') {
                        echo "---";
                      } else {
                        echo $tanggal1;
                      } ?>
                  </td>
                </tr>
                <tr>
                  <td width="22%">Agama</td>
                  <td width="5%"><center>:</center></td>
                  <td><?php 
                  $jabatan = $row->agama;
                  if ($jabatan == 'islam') {
                    echo "Islam";
                  }elseif ($jabatan == 'kristen') {
                    echo "Kristen";
                  }elseif ($jabatan == 'hindu') {
                    echo "Hindu";
                  }elseif ($jabatan == 'budha') {
                    echo "Budha";
                  }elseif ($jabatan == 'konghucu') {
                    echo "KongHucu";
                  }else{
                    echo "---";
                  }
                   ?></td>
                </tr>
                <tr>
                  <td width="22%">Golongan Darah</td>
                  <td width="5%"><center>:</center></td>
                  <td colspan="2"><?php 
                  $jabatan = $row->gol_darah;
                  if ($jabatan == 'a') {
                    echo "A";
                  }elseif ($jabatan == 'b') {
                    echo "B";
                  }elseif ($jabatan == 'ab') {
                    echo "AB";
                  }elseif ($jabatan == 'o') {
                    echo "O";
                  }else{
                    echo "---";
                  }
                 ?></td>
                </tr>
                <tr>
                  <tr>
                  <td width="22%">No Telphon</td>
                  <td width="5%"><center>:</center></td>
                  <td colspan="2"><?php echo $row->no_telpon; ?></td>
                </tr>
                <tr>
                  <td width="22%">Email</td>
                  <td width="5%"><center>:</center></td>
                  <td colspan="2"><?php echo $row->email; ?></td>
                </tr>
                  <td width="22%">Jabatan</td>
                  <td width="5%"><center>:</center></td>
                  <td colspan="2"><?php echo $row->nama_jabatan ?></td>
                </tr>
                <tr>
                  <td width="22%">Pendidikan Terakhir</td>
                  <td width="5%"><center>:</center></td>
                  <td colspan="2"><?php echo $row->pendidikan; ?></td>
                </tr>
                <tr>
                  <td width="22%">Asal Sekolah</td>
                  <td width="5%"><center>:</center></td>
                  <td colspan="2"><?php echo $row->asal_sekolah; ?></td>
                </tr>
              </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<?php echo $no++;} ?>