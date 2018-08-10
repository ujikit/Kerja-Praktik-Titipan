<?php 
$id=$_GET['id'];
mysql_query("DELETE from anggota where kd_anggota='$id'");
echo'<script>window.location="?page=anggota&aksi=view&stts=3";</script>';
?>