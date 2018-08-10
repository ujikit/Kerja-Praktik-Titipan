<?php 
$id=$_GET['id'];
mysql_query("DELETE from petugas where kd_petugas='$id'");
echo'<script>window.location="?page=petugas&aksi=view&stts=3";</script>';
?>