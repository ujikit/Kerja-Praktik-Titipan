<?php 

$ambil = $koneksi->query("SELECT * FROM bidang WHERE id_bidang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM bidang WHERE id_bidang='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=bidang'</script>";

?>