

  <div class="card-body">
     <tr>

        <a href ="<?php echo site_url('matakuliah/add/'); ?>"class="btn btn-primary"><i class="fas fa-plus"></i>Tambah data mata kuliah</a>
     </tr>
<table id="example2" class="table table-bordered table-hover">
  <tr>
    <th>Kode</th>
    <th>Mata Kuliah</th>
    <th>Sks</th>
    <th>Aksi</th>
                    
  </tr>
                  
	 <?php foreach($matakuliah as $m){ ?>
  <tr>
	 <td><?php echo $m['kode']; ?></td>
	 <td><?php echo $m['mata_kuliah']; ?></td>
	 <td><?php echo $m['sks']; ?></td>
	 <td>
    <a href="<?php echo site_url('matakuliah/edit/'.$m['kode']); ?>" class="btn btn-warning btn-sm"> <i class= "fas fa-edit"></i></a> | 
    <a href="<?php echo site_url('matakuliah/remove/'.$m['kode']); ?>"class="btn btn-danger btn-sm"> <i class= "fas fa-trash"></i></a>
    </td>
  </tr>

	<?php } ?>
	
</table>
</div>
