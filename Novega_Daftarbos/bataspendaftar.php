<?php 
include "admin/koneksi.php";

$batas->query("SELECT COUNT (nim) FROM pendaftaran WHERE if($batas['nim'] > 300){
echo 'alert("data penuh")';
} ")
?>

