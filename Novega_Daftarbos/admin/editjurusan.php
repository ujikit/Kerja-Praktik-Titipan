<?php  

$ambil=$koneksi->query("SELECT * FROM jurusan WHERE id_jurusan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<h2>Edit Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kode Jurusan</label>
		<input type="text" class="form-control" name="id_jurusan" value="<?php echo $pecah['id_jurusan']; ?>" readonly>
	</div>
	<div class="form-group">
		<label>Nama Jurusan</label>
		<input type="text" class="form-control" name="nama_jurusan" value="<?php echo $pecah['nama_jurusan']; ?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php  
if (isset($_POST['ubah'])) {
		$koneksi->query("UPDATE jurusan SET id_jurusan='$_POST[id_jurusan]',nama_jurusan='$_POST[nama_jurusan]'
		WHERE id_jurusan='$_GET[id]'");

	echo "<script>alert('data jurusan telah diubah');</script>";
	echo "<script>location='index.php?halaman=jurusan';</script>";
}

?>


