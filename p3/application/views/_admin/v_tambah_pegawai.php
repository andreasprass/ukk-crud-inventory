<?php 
$this->load->view('_bagian/header');
?>
<div class="wrapper" style="height: auto; min-height: 100%;">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>INV</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventaris</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              
              <span class="hidden-xs"><?php echo $this->session->userdata('nama');?> - <?php echo $this->session->userdata('level');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  <?php echo $this->session->userdata('nama');?> - <?php echo $this->session->userdata('level');?>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('index.php/c_admin/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="treeview">
          <a>
            <i class="fa fa-user text-danger"></i> <span>Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('c_admin/tampil_petugas');?>"><i class="fa fa-circle-o"></i> Petugas</a></li>
            <li><a href="<?php echo site_url('c_admin/tampil_pegawai');?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
          </ul>
        </li>
        <li >
          <a href="<?php echo site_url('c_admin/tampil_inventaris');?>">
            <i class="fa fa-list text-warning"></i>
            <span>Inventaris</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('c_admin/tampil_peminjaman');?>">
            <i class="fa fa-tag text-success"></i> <span>Peminjaman</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('c_admin/tampil_pengembalian');?>">
            <i class="fa fa-book text-primary"></i> <span>Pengembalian</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('c_admin/tampil_laporan');?>">
            <i class="fa fa-file text-default"></i> <span>Laporan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 921px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Member
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
            <p>Pastikan username yang anda daftarkan belum digunakan, jika 'username' sudah digunakan maka tambah pegawai tidak akan diproses!</p>
          </div>
      <div class="row">
        <div class="col-xs-12">
<!-- Horizontal Form -->
<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Petugas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('c_admin/validasi_pegawai','class="form-horizontal"'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="namaPetugas" class="col-xs-3 control-label">Nama Pegawai</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo set_value('nama_petugas'); ?>" name="nama_pegawai" placeholder="Nama Pegawai">
                  <?php if(!empty(form_error('nama_petugas'))){ ?>
                  <div class="alert alert-danger "><?php echo form_error('nama_petugas');?></div>
                  <?php }?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">NIP</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="nip" placeholder="NIP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Alamat</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Username</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="username_pgw" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-xs-3 control-label">Password</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="password_pgw" placeholder="Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php  echo base_url()."index.php/c_admin/tampil_pegawai"?>" class="btn btn-warning">Batal</a>
                <button type="submit" class="btn btn-success pull-right">Tambah Data</button>
              </div>
            </form>
          </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright © 2019 Andreas Prasetya</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<?php 
  $this->load->view('_bagian/footer');
?>
<script>
  $(function (){
    $('.ptgs').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>