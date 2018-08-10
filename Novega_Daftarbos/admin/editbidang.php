<?php  

$ambil=$koneksi->query("SELECT * FROM bidang WHERE id_bidang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<h2>Edit Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kode Bidang</label>
		<input type="text" class="form-control" name="id_bidang" value="<?php echo $pecah['id_bidang']; ?>" readonly>
	</div>
	<div class="form-group">
		<label>Nama Bidang</label>
		<input type="text" class="form-control" name="nama_bidang" value="<?php echo $pecah['nama_bidang']; ?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php  
if (isset($_POST['ubah'])) {
		$koneksi->query("UPDATE bidang SET id_bidang='$_POST[id_bidang]',nama_bidang='$_POST[nama_bidang]'
		WHERE id_bidang='$_GET[id]'");

	echo "<script>alert('data bidang telah diubah');</script>";
	echo "<script>location='index.php?halaman=bidang';</script>";
}

?>


