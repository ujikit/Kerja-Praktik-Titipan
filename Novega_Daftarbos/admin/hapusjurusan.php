<?php 

$ambil = $koneksi->query("SELECT * FROM jurusan WHERE id_jurusan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM jurusan WHERE id_jurusan='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=jurusan'</script>";

?>