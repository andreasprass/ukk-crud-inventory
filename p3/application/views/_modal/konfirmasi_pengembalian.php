<!-- Modal tambah data -->
<div class="modal fade" id="pengembalian" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>

				<h3 class="modal-title">Konfirmasi Pengembalian</h3>
			</div>
			<?php echo form_open('c_admin/pengembalian','class="form-horizontal"'); ?>
			<div class="modal-body modal-success">
				<div class="form-group">
					<label for="nama_petugas" class="col-sm-3 control-label">Nama Peminjam</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama_pegawai" id="nama" disabled="">
						<input type="hidden" id="id_peminjaman" name="id_peminjaman">
					</div>
				</div>
				<div class="form-group">
                  <label for="tanggal" class="col-xs-3 control-label">Tanggal Pinjam</label>
                  <div class="col-sm-6">
                    <div class="input-group date">
                      <div class="input-group-addon ">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="tanggal_pinjam" name="tanggal" disabled="">
                    </div>
                  </div>
                </div>
				<div class="form-group">
                  <label for="tanggal" class="col-xs-3 control-label">Tanggal Barang Kembali</label>
                  <div class="col-sm-6">
                    <div class="input-group date">
                      <div class="input-group-addon ">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="tanggal" name="tanggal_kembali" >
                    </div>
                  </div>
                </div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning pull-left" type="button" data-dismiss="modal">Tutup</button>
				<button class="btn btn-success pull-right"  type="submit">Konfirmasi</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>