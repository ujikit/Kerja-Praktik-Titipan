<?php 
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'perpus';
 
 # koneksi Database
 $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$koneksi = mysql_connect("localhost","root","") or die ("Database connection failed");
mysql_select_db("perpus") or die ("Database nggak ada");
?>