<?php
error_reporting(0);
include "../config.php";

//anti bypass
function anti_injeksi($karakter){
  $saring = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($karakter,ENT_QUOTES))));
  return $saring;
}

//username dan passord
$username = anti_injeksi($_POST['username']);
$password = anti_injeksi($_POST['password']);

$login=mysql_query("SELECT * FROM petugas WHERE user_login='$username' AND pwd_login='$password'");
if (empty(mysql_num_rows($login))) {
	$login=mysql_query("SELECT * FROM anggota WHERE username='$username' AND password='$password'");
}





$data=mysql_num_rows($login);
$a=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($a['hak_akses']=='petugas'){
	session_start();
	$_SESSION[kode]	= $a[kd_petugas];
	$_SESSION[username]	= $a[user_login];
	$_SESSION[nama] = $a[nama_petugas];
	$_SESSION[akses] = 'petugas';
	header('location:index.php');
}
else if ($a['hak_akses']=='') {
	session_start();
	$_SESSION[kode]	= $a[kd_anggota];
	$_SESSION[username]	= $a[username];
	$_SESSION[nama] = $a[nama_anggota];
	$_SESSION[akses] = 'anggota';
	header('location:index.php');
}

else{
	
	header('location:login.php');
	echo "<script>alert('Username atau password tidak valid.')</script>";
}
?>

