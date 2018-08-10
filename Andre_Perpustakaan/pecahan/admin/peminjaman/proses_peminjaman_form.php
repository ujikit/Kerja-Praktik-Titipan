<?php
error_reporting(0);
include_once "../../config.php";
$dataTroli          = $_GET['dataTroli'];
$kd_petugas         = $_GET['kd_petugas'];
$tgl_pinjam         = $_GET['tgl_pinjam'];
$tgl_harus_kembali  = $_GET['tgl_harus_kembali'];

$dataTroli = explode(",", $dataTroli);
$dataTroliCount = count($dataTroli);

for ($i=0; $i < $dataTroliCount ; $i++) {
  $data        = explode("|", $dataTroli[$i]);
  $kd_buku     = $data[0];
  $jml_buku    = $data[1];
  $kd_anggota  = $data[2];
  // Generate No. Pinjam
  $h1         = mysql_query("SELECT MAX(no_pinjam) AS kd FROM pinjam");
  $data       = mysql_fetch_array($h1);
  $koden      = $data['kd'];
  if ($koden == "") {
    mysql_query("INSERT INTO pinjam (no_pinjam, kd_petugas, kd_anggota, tgl_pinjam, tgl_harus_kembali) VALUES ('PNJ000001','$kd_petugas','$kd_anggota','$tgl_pinjam','$tgl_harus_kembali')") or die(mysql_error());
  }
  else {
    $no_lama =(int)substr($koden,3);
    $no_lama++;
    $char="PNJ";
    $newid=$char.sprintf("%06s",$no_lama);

    $sqls = "INSERT INTO pinjam (no_pinjam, kd_petugas, kd_anggota, tgl_pinjam, tgl_harus_kembali) VALUES ('$newid','$kd_petugas','$kd_anggota','$tgl_pinjam','$tgl_harus_kembali')" or die(mysql_error());
    $query = mysql_query($sqls);
    if ($query) {
      echo "berhasil";
    }
    else {
      mysql_error();
      echo "gagal";
    }

  }


}
// echo $dataTroliCount;
// print_r($dataTroli);

?>
