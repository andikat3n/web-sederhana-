<div class="card-body">
 	<tr>
	<a href ="<?php echo site_url('mahasiswa/add/'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah data mahasiswa</a>
 	</tr>
 <table id="example2" class="table table-bordered table-hover">
    <tr>
		<th>Nim</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Actions</th>
    </tr>
	<?php foreach($mahasiswa as $m){ ?>
	
    <tr>
		<td><?php echo $m['nim']; ?></td>
		<td><?php echo $m['nama']; ?></td>
		<td><?php echo $m['kelas']; ?></td>
		<td>
            <a href="<?php echo site_url('mahasiswa/edit/'.$m['nim']); ?>"class="btn btn-warning btn-sm"> <i class= "fas fa-edit"></i></a> | 
            <a href="<?php echo site_url('mahasiswa/remove/'.$m['nim']); ?>"class="btn btn-danger btn-sm"> <i class= "fas fa-trash"></i></a>
        </td>
    </tr>

	

	<?php } ?>
 </table>
</div>
