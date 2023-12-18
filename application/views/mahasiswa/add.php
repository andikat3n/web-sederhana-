<?php echo form_open('mahasiswa/add'); ?>
	<form>
	<div class="form-group">
		<label>Nama</label> 
		<input type="text" name="nama" class ="form-control" value="<?php echo $this->input->post('nama'); ?>" />
	</div>


	<div class="form-group">
		<label>Kelas</label> 
		<input type="text" name="kelas" class="form-control" value="<?php echo $this->input->post('kelas'); ?>" />
	</div>

	<div class="form-group">
		<label>Nim</label>
		<input type="text" name="nim" class="form-control" value="<?php echo $this->input->post('nim'); ?>" />
	</div>

	
	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
	<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
</form>
<?php echo form_close(); ?>