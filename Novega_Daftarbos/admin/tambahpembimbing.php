<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kode Pembimbing</label>
		<input type="text" class="form-control" name="id_pembimbing">
	</div>
	<div class="form-group">
		<label>Nama Pembimbing</label>
		<input type="text" class="form-control" name="nama_pembimbing">
	</div>	
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php  
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO pembimbing
		(id_pembimbing,nama_pembimbing)
		VALUES(
		'$_POST[id_pembimbing]',
		'$_POST[nama_pembimbing]')");

	echo "<script>alert('Data Tersimpan');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pembimbing'>";
}

?>


