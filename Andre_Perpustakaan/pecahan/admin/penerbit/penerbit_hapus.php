<?php 
$id=$_GET['id'];
mysql_query("DELETE from penerbit where kd_penerbit='$id'");
echo'<script>window.location="?page=penerbit&aksi=view&stts=3";</script>';
?>