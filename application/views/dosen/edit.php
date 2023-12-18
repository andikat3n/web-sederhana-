<?php echo form_open('dosen/edit/'.$dosen['nidn']); ?>
	<form>
	<div class="form-group">
		<labe>Nama Dosen</labe> 
		<input type="text" name="nama_dosen" class="form-control" value="<?php echo ($this->input->post('nama_dosen') ? $this->input->post('nama_dosen') : $dosen['nama_dosen']); ?>" />
	</div>

	<div class="form-group">
		<label>Jurusan</label> 
		<input type="text" name="jurusan" class ="form-control" value="<?php echo ($this->input->post('jurusan') ? $this->input->post('jurusan') : $dosen['jurusan']); ?>" />
	</div>

	<div class="form-group">
		<label>nidn</label> 
		<input type="text" name="nidn" class="form-control" value="<?php echo ($this->input->post('nidn') ? $this->input->post('nidn') : $dosen['nidn']); ?>" />
	</div>
	
	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Save</button>
	</form>
<?php echo form_close(); ?>