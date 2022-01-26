<!-- Modal tambah data -->
<div class="modal fade" id="edit_data_inventaris" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>

        <h3 class="modal-title">Edit Data Petugas</h3>
      </div>
      <?php echo form_open('c_admin/edit_inventaris','class="form-horizontal"'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="namaPetugas" class="col-xs-3 control-label">Nama Barang</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control"  name="nama_barang" placeholder="Nama Barang" id="nama">
                  <input type="hidden" class="form-control"  name="id"  id="id">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Kondisi</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal" class="col-xs-3 control-label">Tanggal Register</label>
                  <div class="col-sm-6">
                    <div class="input-group date">
                      <div class="input-group-addon ">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="tanggal" name="tanggal">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Kode Inventaris</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" id="kode_inventaris" name="kode_inventaris" placeholder="Kode Inventaris">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Jumlah Barang</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control"  name="jumlah_barang" id="jumlah_barang"placeholder="Jumlah Barang">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php  echo base_url()."index.php/c_admin/tampil_inventaris"?>" class="btn btn-warning">Batal</a>
                <button type="submit" class="btn btn-success pull-right">Simpan</button>
              </div>
            </form>
    </div>
  </div>
</div>