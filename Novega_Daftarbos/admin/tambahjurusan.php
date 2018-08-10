<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kode Jurusan</label>
		<input type="text" class="form-control" name="id_jurusan">
	</div>
	<div class="form-group">
		<label>Nama Jurusan</label>
		<input type="text" class="form-control" name="nama_jurusan">
	</div>	
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php  
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO jurusan
		(id_jurusan,nama_jurusan)
		VALUES(
		'$_POST[id_jurusan]',
		'$_POST[nama_jurusan]')");

	echo "<script>alert('Data Tersimpan');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=jurusan'>";
}

?>


