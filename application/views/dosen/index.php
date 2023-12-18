<div class="card-body">
	<tr>  
    <a href ="<?php echo site_url('dosen/add'); ?>"class="btn btn-primary"><i class="fas fa-plus"></i>Tambah data dosen</a>
  </tr>
<table id="example2" class="table table-bordered table-hover">
  
    <tr>
		<th>Nidn</th>
		<th>Nama Dosen</th>
		<th>Jurusan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($dosen as $d){ ?>
    <tr>
		<td><?php echo $d['nidn']; ?></td>
		<td><?php echo $d['nama_dosen']; ?></td>
		<td><?php echo $d['jurusan']; ?></td>
		<td>
            <a href="<?php echo site_url('dosen/edit/'.$d['nidn']); ?>"class="btn btn-warning btn-sm"> <i class= "fas fa-edit"></i></a>| 
            <a href="<?php echo site_url('dosen/remove/'.$d['nidn']); ?>"class="btn btn-danger btn-sm"> <i class= "fas fa-trash"></i></a>
        </td>
    </tr>
	<?php } ?>
</table>
</div>