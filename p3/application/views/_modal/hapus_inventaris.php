<!-- Modal tambah data -->
<div class="modal fade" id="hapus_inventaris" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>

				<h3 class="modal-title">Hapus Data Inventaris</h3>
			</div>
			<?php echo form_open('c_admin/hapus_inventaris','class="form-horizontal"'); ?>
			<div class="modal-body">
				<h3>Yakin ingin menghapus ??</h3>
				<div class="form-group">
					<label for="nama_petugas" class="col-sm-3 control-label">Nama Barang</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama_barang" id="nama_barang" disabled="">
						<input type="hidden" id="id_inventaris" name="id_inventaris">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning pull-left" type="button" data-dismiss="modal">Tutup</button>
				<button class="btn btn-danger pull-right"  type="submit">Hapus</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>