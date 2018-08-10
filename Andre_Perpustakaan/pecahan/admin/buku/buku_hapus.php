<?php 
$id=$_GET['id'];
mysql_query("DELETE from buku where kd_buku='$id'");
echo'<script>window.location="?page=anggota&aksi=view&stts=3";</script>';
?>