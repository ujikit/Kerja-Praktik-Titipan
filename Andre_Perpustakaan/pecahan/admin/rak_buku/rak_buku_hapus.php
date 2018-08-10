<?php 
$id=$_GET['id'];
mysql_query("DELETE from rak_buku where kd_rak='$id'");
echo'<script>window.location="?page=rak_buku&aksi=view&stts=3";</script>';
?>