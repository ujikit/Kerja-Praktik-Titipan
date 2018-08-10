<?php  

$ambil=$koneksi->query("SELECT * FROM info WHERE id_info='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<h2>Edit Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>id</label>
		<input type="text" class="form-control" name="id_info" value="<?php echo $pecah['id_info']; ?>" readonly>
	</div>
	<div class="form-group">
		<label>judul</label>
		<input type="text" class="form-control" name="judul" value="<?php echo $pecah['judul']; ?>">
	</div>
	<div class="form-group">
    <label>gambar</label>
    <input type="file" class="form-control" name="photo">
  </div>	
	<div class="form-group">
		<label>deskripsi</label>
		<input type="text" class="form-control" name="deskripsi" value="<?php echo $pecah['deskripsi']; ?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php  
if (isset($_POST['ubah'])) {
	$nama = $_FILES['photo']['name'];
	$lokasi = $_FILES['photo']['tmp_name'];
	move_uploaded_file($lokasi, "admin/img/".$nama);
	$koneksi->query("UPDATE info SET id_info='$_POST[id_info]',judul='$_POST[judul]',gambar='$_POST[gambar]',deskripsi='$_POST[deskripsi]'
		WHERE id_info='$_GET[id]'");

	echo "<script>alert('data info telah diubah');</script>";
	echo "<script>location='index.php?halaman=info';</script>";
}

?>


