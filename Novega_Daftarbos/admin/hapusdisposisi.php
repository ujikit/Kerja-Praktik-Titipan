<?php 

$ambil = $koneksi->query("SELECT * FROM disposisi WHERE id_disposisi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM disposisi WHERE id_disposisi='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=disposisi'</script>";

?>