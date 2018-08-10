<?php 
$ambil1=$koneksi->query("SELECT * FROM disposisi JOIN bidang JOIN pembimbing JOIN jurusan WHERE disposisi.id_bidang=bidang.id_bidang AND disposisi.id_pembimbing=pembimbing.id_pembimbing AND disposisi.id_jurusan=jurusan.id_jurusan AND id_disposisi='$_GET[id]'");
$jipuk = $ambil1->fetch_assoc();
?>

<h2>Edit Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Jurusan</label>
		
		<select name="jurusan" class="form-control">
			<option value="<?php echo $jipuk['id_jurusan']; ?>"><?php echo $jipuk['nama_jurusan']; ?></option>
			<?php 
			$ambil=$koneksi->query("SELECT * FROM jurusan");
			while ($pecah = $ambil->fetch_assoc()){
				?>
				<option value="<?php echo $pecah['id_jurusan']; ?>"><?php echo $pecah['nama_jurusan']; ?></option>
			<?php } ?>
		</select>
		
	</div>
	<div class="form-group">
		<label>Nama Bidang</label>
		<select name="bidang"  class="form-control">
			<option value="<?php echo $jipuk['id_bidang']; ?>"><?php echo $jipuk['nama_bidang']; ?></option>
			<?php 
			$ambil=$koneksi->query("SELECT * FROM bidang");
			while ($pecah = $ambil->fetch_assoc()){
				?>
				<option value="<?php echo $pecah['id_bidang']; ?>"><?php echo $pecah['nama_bidang']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Nama Pembimbing</label>
		<select name="pembimbing" class="form-control" >
			<option value="<?php echo $jipuk['id_pembimbing']; ?>"><?php echo $jipuk['nama_pembimbing']; ?></option>
			<?php 
			$ambil=$koneksi->query("SELECT * FROM pembimbing");
			while ($pecah = $ambil->fetch_assoc()){
				?>
				<option value="<?php echo $pecah['id_pembimbing']; ?>"><?php echo $pecah['nama_pembimbing']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Nama Pembimbing Sekolah</label>
		<input type="text" class="form-control" name="nmpem_sekolah">
	</div>
	<div class="form-group">
		<label>NoHP</label>
		<input type="text" class="form-control" name="nohp">
	</div>

	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php  
if (isset($_POST['ubah'])) {
	$koneksi->query("UPDATE disposisi SET id_jurusan='$_POST[jurusan]',id_bidang='$_POST[bidang]',
		id_pembimbing='$_POST[pembimbing]',nmpem_sekolah='$_POST[nmpem_sekolah]',nohp='$_POST[nohp]' WHERE id_disposisi='$_GET[id]'");

	echo "<script>alert('Data berhasil diubah');</script>";
	echo "<script>location='index.php?halaman=disposisi';</script>";
}

?>


