<?php  

$ambil=$koneksi->query("SELECT * FROM pembimbing WHERE id_pembimbing='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<h2>Edit Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kode Pembimbing</label>
		<input type="text" class="form-control" name="id_pembimbing" value="<?php echo $pecah['id_pembimbing']; ?>" readonly>
	</div>
	<div class="form-group">
		<label>Nama Pembimbing</label>
		<input type="text" class="form-control" name="nama_pembimbing" value="<?php echo $pecah['nama_pembimbing']; ?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php  
if (isset($_POST['ubah'])) {
		$koneksi->query("UPDATE pembimbing SET id_pembimbing='$_POST[id_pembimbing]',nama_pembimbing='$_POST[nama_pembimbing]'
		WHERE id_pembimbing='$_GET[id]'");

	echo "<script>alert('data pembimbing telah diubah');</script>";
	echo "<script>location='index.php?halaman=pembimbing';</script>";
}

?>


