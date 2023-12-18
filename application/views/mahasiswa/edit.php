<?php echo form_open('mahasiswa/edit/'.$mahasiswa['nim']); ?>
	<form>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $mahasiswa['nama']); ?>" />
	</div>

	<div class="form-group">
		<label>Kelas</label> 
		<input type="text" name="kelas" class="form-control" value="<?php echo ($this->input->post('kelas') ? $this->input->post('kelas') : $mahasiswa['kelas']); ?>" />
	</div>

	<div class="form-group">
	<label>Nim</label>
	<input type="text" name="nim" class="form-control" value="<?php echo ($this->input->post('nim') ? $this->input->post('nim') : $mahasiswa['nim']); ?>" />
	</div>

	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Save</button>
	</form>
<?php echo form_close(); ?>