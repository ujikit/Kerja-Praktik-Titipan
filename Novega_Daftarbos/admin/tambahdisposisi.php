<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Jurusan</label>
		<input type="hidden" class="form-control" name="nim" value="<?php echo $_GET['nim']; ?>">
		<select id="jurusan" name="nama_jurusan" class="form-control">
			<option value="">Pilih Jurusan</option>
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
		<select id="bidang" name="nama_bidang" class="form-control">
			<option value="">Pilih Bidang</option>
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
		<select id="pembimbing" name="nama_pembimbing" class="form-control">
			<option value="">Pilih pembimbing</option>
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

	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php  
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO disposisi
		(id_bidang,id_pembimbing,id_jurusan)
		VALUES(
		'$_POST[nama_jurusan]',
		'$_POST[nama_bidang]',
		'$_POST[nama_pembimbing]',
		'$_POST[nim]',
		'$_POST[nmpem_sekolah]',
		'$_POST[nohp]',)");

	echo "<script>alert('Data Tersimpan');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=disposisi'>";
}

?>


