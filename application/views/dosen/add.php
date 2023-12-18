<?php echo form_open('dosen/add'); ?>
	<form>
	<div class="form-group">
		<label>Nidn</label> 
		<input type="text" name="nidn" class="form-control" value="<?php echo $this->input->post('nidn'); ?>" />
	</div>

	<div class="form-group">
		<label>Nama Dosen</label> 
		<input type="text" name="nama_dosen" class="form-control" value="<?php echo $this->input->post('nama_dosen'); ?>" />
	</div>

	<div class="form-group">
		<label>Jurusan</label> 
		<input type="text" name="jurusan" class="form-control" value="<?php echo $this->input->post('jurusan'); ?>" />
	</div>
	
	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Save</butto
	</form>
<?php echo form_close(); ?>