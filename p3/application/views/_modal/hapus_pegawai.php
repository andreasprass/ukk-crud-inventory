<!-- Modal tambah data -->
<div class="modal fade" id="hapus_pegawai" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>

				<h3 class="modal-title">Hapus Data Pegawai</h3>
			</div>
			<?php echo form_open('c_admin/hapus_pegawai','class="form-horizontal"'); ?>
			<div class="modal-body">
				<input type="hidden" id="id_pegawai" name="id_pegawai">
				<h3>Yakin Ingin Dihapus ?</h3>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning pull-left" type="button" data-dismiss="modal">Tutup</button>
				<button class="btn btn-danger pull-right"  type="submit">Hapus</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>