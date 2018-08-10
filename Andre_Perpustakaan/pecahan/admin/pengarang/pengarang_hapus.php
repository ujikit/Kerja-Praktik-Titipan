<?php 
$id=$_GET['id'];
mysql_query("DELETE from pengarang where kd_pengarang='$id'");
echo'<script>window.location="?page=pengarang&aksi=view&stts=3";</script>';
?>