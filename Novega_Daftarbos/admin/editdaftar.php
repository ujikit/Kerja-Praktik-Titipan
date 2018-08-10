<h2>Ubah Produk</h2>

<?php  

$ambil=$koneksi->query("SELECT * FROM pendaftaran WHERE id_pkl='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nim</label>
		<input type="text" class="form-control" name="nim" value="<?php echo $pecah['nim']; ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" class="form-control" name="jenis_kel" value="<?php echo $pecah['jenis_kel']; ?>">
	</div>
	<div class="form-group">
		<label>Sekolah</label>
		<input type="text" class="form-control" name="sekolah" value="<?php echo $pecah['sekolah']; ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $pecah['email']; ?>">
	</div>
	<div class="form-group">
		<img src="../admin/img/<?php echo $pecah['photo']; ?>" width="200">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="photo" value="<?php echo $pecah['photo']; ?>">
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $pecah['tempat_lahir']; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $pecah['tgl_lahir']; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat" rows="3"><?php echo $pecah['alamat']; ?></textarea>
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="text" class="form-control" name="status_sekarang" value="<?php echo $pecah['status_sekarang']; ?>">
	</div>
	<div class="form-group">
		<label>Handphone</label>
		<input type="text" class="form-control" name="nohp" value="<?php echo $pecah['nohp']; ?>">
	</div>
	
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php  

if (isset($_POST['ubah'])) 
{
	$namafoto=$_FILES['photo']['name'];
	$lokasifoto = $_FILES['photo']['tmp_name'];
	//jk foto diubah
	if (!empty($lokasifoto)) 
	{
		move_uploaded_file($lokasifoto, "../admin/img/$namafoto");

		$koneksi->query("UPDATE pendaftaran SET nim='$_POST[nim]',nama='$_POST[nama]',
			jenis_kel='$_POST[jenis_kel]',sekolah='$_POST[sekolah]',email='$_POST[email]',photo='$namafoto',tempat_lahir='$_POST[tempat_lahir]',tgl_lahir='$_POST[tgl_lahir]',alamat='$_POST[alamat]',status_sekarang='$_POST[status_sekarang]',nohp='$_POST[nohp]'
			WHERE id_pkl='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE pendaftaran SET nim='$_POST[nim]',nama='$_POST[nama]',
			jenis_kel='$_POST[jenis_kel]',sekolah='$_POST[sekolah]',email='$_POST[email]',tempat_lahir='$_POST[tempat_lahir]',tgl_lahir='$_POST[tgl_lahir]',alamat='$_POST[alamat]',status_sekarang='$_POST[status_sekarang]',nohp='$_POST[nohp]'
			WHERE id_pkl='$_GET[id]'");
	}
	echo "<script>alert('data produk telah diubah');</script>";
	echo "<script>location='index.php?halaman=pendaftaran';</script>";
}

?>


