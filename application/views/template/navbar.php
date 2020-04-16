<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/Pegawai') ?>"><i class="fa fa-circle-o"></i> Tambah Data </a></li>
            <li><a href="<?php echo base_url('admin/Pegawai/data_pegawai') ?>"><i class="fa fa-circle-o"></i> Data Karyawan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-odnoklassniki"></i>
            <span>Jabatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url ('admin/Jabatan') ?>"><i class="fa fa-circle-o"></i> Tambah Jabatan </a></li>
            <li><a href="<?php echo base_url ('admin/Jabatan/data_jabatan') ?>"><i class="fa fa-circle-o"></i> Data Jabatan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i>
            <span>Payroll</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/Payroll') ?>"><i class="fa fa-circle-o"></i> Tambah Data Gaji </a></li>
            <li><a href="<?php echo base_url('admin/Payroll/data_gaji') ?>"><i class="fa fa-circle-o"></i>Data Gaji</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-users"></i> <span>Settig User</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>