<!-- Modal tambah data -->
<div class="modal fade" id="edit_pegawai" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>

				<h3 class="modal-title">Edit Data Petugas</h3>
			</div>
			<?php echo form_open('c_admin/tambah_inventaris','class="form-horizontal"'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="namaPetugas" class="col-xs-3 control-label">Nama Barang</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control"  name="nama_barang" placeholder="Nama Barang">
                  <input type="hidden" id="id_inventaris" name="id_inventaris">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis" class="col-xs-3 control-label">Jenis</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="jenis">
                      <option>-Pilih-</option>
                      <?php foreach ($jenis as $row) {?>
                      <option value="<?php echo $row->id_jenis;?>"><?php echo $row->nama_jenis;?></option>
                      <?php }?>
                    </select>
                    <?php if(!empty(form_error('jenis'))){ ?>
                    <div class="alert alert-danger "><?php echo form_error('jenis');?></div>
                    <?php }?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Kondisi</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="kondisi" placeholder="Kondisi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-xs-3 control-label">Keterangan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                    <?php if(!empty(form_error('password'))){ ?>
                    <div class="alert alert-danger "><?php echo form_error('password');?></div>
                    <?php }?>
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
                  <label for="jenis" class="col-xs-3 control-label">Ruang</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="ruang">
                      <option>-Pilih-</option>
                      <?php foreach ($ruang as $row) {?>
                      <option value="<?php echo $row->id_ruang;?>"><?php echo $row->nama_ruang;?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Kode Inventaris</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="kode_inventaris" placeholder="Kode Inventaris">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Jumlah Barang</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="namaPetugas" class="col-xs-3 control-label">Nama Petugas</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="nama_petugas">
                      <option>-Pilih-</option>
                      <?php foreach ($petugas as $row) {?>
                      <option value="<?php echo $row->id_petugas;?>"><?php echo $row->nama_petugas;?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php  echo base_url()."index.php/c_admin/index"?>" class="btn btn-warning">Batal</a>
                <button type="submit" class="btn btn-success pull-right">Simpan</button>
              </div>
            </form>
		</div>
	</div>
</div>