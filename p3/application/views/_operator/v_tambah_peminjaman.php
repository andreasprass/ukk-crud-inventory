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
                  <a href="<?php echo base_url('index.php/c_operator/logout');?>" class="btn btn-default btn-flat">Sign out</a>
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
        <li>
          <a href="<?php echo site_url('c_operator/tampil_peminjaman');?>">
            <i class="fa fa-tag text-success"></i> <span>Peminjaman</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('c_operator/tampil_pengembalian');?>">
            <i class="fa fa-book text-primary"></i> <span>Pengembalian</span>
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
      <div class="row">
        <div class="col-xs-12">
<!-- Horizontal Form -->
<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('c_operator/tambah_peminjaman','class="form-horizontal"'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="namaPetugas" class="col-xs-3 control-label">Nama Peminjam</label>
                  <div class="col-sm-6">
                  <select class="form-control" name="pegawai">
                      <option>-Pilih-</option>
                      <?php foreach ($pegawai as $row) {?>
                      <option value="<?php echo $row->id_pegawai;?>"><?php echo $row->nama_pegawai;?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Nama Barang </label>
                  <div class="col-sm-6">
                  <select class="form-control" name="nama_barang">
                      <option>-Pilih-</option>
                      <?php foreach ($barang as $row) {?>
                      <option value="<?php echo $row->id_inventaris;?>"><?php echo $row->nama_barang;?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Jumlah</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="jumlah_pinjam" placeholder="Jumlah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal" class="col-xs-3 control-label">Tanggal Pinjam</label>
                  <div class="col-sm-6">
                    <div class="input-group date">
                      <div class="input-group-addon ">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right"  id="tanggal" name="tanggal">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php  echo base_url()."index.php/c_operator/tampil_pegawai"?>" class="btn btn-warning">Batal</a>
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