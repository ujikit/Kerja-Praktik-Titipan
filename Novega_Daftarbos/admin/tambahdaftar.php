<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nim</label>
		<input type="text" class="form-control" name="nim">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" class="form-control" name="jenis_kel">
	</div>
	<div class="form-group">
		<label>Sekolah</label>
		<input type="text" class="form-control" name="sekolah">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="photo">
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" name="tempat_lahir">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tgl_lahir">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat" rows="9"></textarea>
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="text" class="form-control" name="status_sekarang">
	</div>
	<div class="form-group">
		<label>Handphone</label>
		<input type="text" class="form-control" name="nohp">
	</div>
	
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php  
if (isset($_POST['save'])) {
	$nama = $_FILES['photo']['name'];
	$lokasi = $_FILES['photo']['tmp_name'];
	move_uploaded_file($lokasi, "../admin/img/".$nama);
	$koneksi->query("INSERT INTO Pendaftaran
		(nim,nama,jenis_kel,sekolah,email,photo,tempat_lahir,tgl_lahir,alamat,status_sekarang,nohp)
		VALUES(
		'$_POST[nim]',
		'$_POST[nama]',
		'$_POST[jenis_kel]',
		'$_POST[sekolah]',
		'$_POST[email]',
		'$nama', 
		'$_POST[tempat_lahir]',
		'$_POST[tgl_lahir]',
		'$_POST[alamat]',
		'$_POST[status_sekarang]',
		'$_POST[nohp]')");

	echo "<script>alert('Data Tersimpan');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pendaftaran'>";
}

?>


