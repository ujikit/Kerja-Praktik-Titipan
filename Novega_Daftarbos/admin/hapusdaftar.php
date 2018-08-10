<?php 

$ambil = $koneksi->query("SELECT * FROM pendaftaran WHERE id_pkl='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['photo'];
if (file_exists("../admin/img/$fotoproduk")) 
{
	unlink("../admin/img/$fotoproduk");
}

$koneksi->query("DELETE FROM pendaftaran WHERE id_pkl='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=pendaftaran'</script>";

?>