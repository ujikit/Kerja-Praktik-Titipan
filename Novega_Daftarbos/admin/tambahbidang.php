<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kode Bidang</label>
		<input type="text" class="form-control" name="id_bidang">
	</div>
	<div class="form-group">
		<label>Nama Bidang</label>
		<input type="text" class="form-control" name="nama_bidang">
	</div>	
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php  
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO bidang
		(id_bidang,nama_bidang)
		VALUES(
		'$_POST[id_bidang]',
		'$_POST[nama_bidang]')");

	echo "<script>alert('Data Tersimpan');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=bidang'>";
}

?>


