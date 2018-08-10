<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>id</label>
		<input type="text" class="form-control" name="id_info">
	</div>
	<div class="form-group">
		<label>judul</label>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
    <label>gambar</label>
    <input type="file" class="form-control" name="gambar">
  </div>	
	<div class="form-group">
		<label>deskripsi</label>
		<input type="text" class="form-control" name="deskripsi">
	</div>	
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php  
if (isset($_POST['save'])) {
  $nama = $_FILES['gambar']['name'];
  $lokasi = $_FILES['gambar']['tmp_name'];
  move_uploaded_file($lokasi, "img/".$nama);
  $koneksi->query("INSERT INTO info
    (id_info,judul,gambar,deskripsi)
    VALUES(
    '$_POST[id_info]',
    '$_POST[judul]',
    '$nama', 
    '$_POST[deskripsi]')");


  echo "<script>alert('Data Tersimpan ');</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=info'>";
}

?>


