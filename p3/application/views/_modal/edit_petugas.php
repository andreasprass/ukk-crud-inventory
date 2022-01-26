<!-- Modal tambah data -->
<div class="modal fade" id="edit_petugas" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>

				<h3 class="modal-title">Edit Data Petugas</h3>
			</div>
			<?php echo form_open('c_admin/edit_petugas','class="form-horizontal"'); ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="nama_petugas" class="col-sm-3 control-label">Nama Petugas</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Nama Penerbit">
						<input type="hidden" id="id_petugas" name="id_petugas">
					</div>
				</div>
				<div class="form-group">
					<label for="username" class="col-sm-3 control-label">Username</label>
					<div class="col-sm-9">
						<input name="username" class="form-control" id="username" rows="3" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="col-sm-3 control-label">Level</label>
					<div class="col-sm-9">
					
					<select class="form-control" name="level" id="level">
						<option value="1">Admin</option>
						<option value="2">Operator</option>
					</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning pull-left" type="button" data-dismiss="modal">Tutup</button>
				<button class="btn btn-success pull-right"  type="submit">Simpan</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>