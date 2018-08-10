<?php 

$ambil = $koneksi->query("SELECT * FROM info WHERE id_info='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM info WHERE id_info='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=info'</script>";

?>