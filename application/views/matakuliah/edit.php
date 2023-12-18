<?php echo form_open('matakuliah/edit/'.$matakuliah['kode']); ?>
	<form>
	<div class="form-group">
		<label>Kode</label> 
		<input type="text" name="kode" class="form-control" value="<?php echo ($this->input->post('kode') ? $this->input->post('kode') : 
		$matakuliah['kode']); ?>" />
	</div>

	<div class="form-group">
		<label>Mata Kuliah</label> 
		<input type="text" name="mata_kuliah" class="form-control" value="<?php echo ($this->input->post('mata_kuliah') ? $this->input->post('mata_kuliah') : $matakuliah['mata_kuliah']); ?>" />
	</div>

	<div class="form-group">
		<label>Sks</label> 
		<input type="text" name="sks" class="form-control" value="<?php echo ($this->input->post('sks') ? $this->input->post('sks') : 
		$matakuliah['sks']); ?>" />
	</div>

	
	<button type="submit"class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Save</button>
	</form>
<?php echo form_close(); ?>