<?php 
$id=$_GET['id'];
mysql_query("DELETE from klasifikasi where kd_klasifikasi='$id'");
echo'<script>window.location="?page=klasifikasi&aksi=view&stts=3";</script>';
?>