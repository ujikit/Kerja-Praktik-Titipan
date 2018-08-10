<?php 

$ambil = $koneksi->query("SELECT * FROM pembimbing WHERE id_pembimbing='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pembimbing WHERE id_pembimbing='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=pembimbing'</script>";

?>