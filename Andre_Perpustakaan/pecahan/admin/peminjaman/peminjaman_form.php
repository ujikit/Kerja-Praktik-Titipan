<?php
  $timezone = "Asia/Colombo";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");
  $nexday = date('Y-m-d',strtotime("+7 day"));
?>

<?php
include '../config.php';
$sql='SELECT MAX(no_pinjam) AS kd FROM pinjam';
$h1=mysql_query($sql);
$data=mysql_fetch_array($h1);
$koden=$data['kd'];
$no_lama =(int)substr($koden,3);
$no_lama++;
$char="PNJ";
$newid=$char.sprintf("%06s",$no_lama);
?>
<?php
include '../config.php';
  if(isset($_POST['simpan']))
      {
        $no_pinjam = $newid;
        $kd_petugas = $_SESSION['kode'];
        $kd_anggota = $_POST['kd_anggota'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_harus_kembali = $_POST['tgl_harus_kembali'];

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($no_pinjam =='') or ($kd_petugas =='') or ($kd_anggota =='') or ($tgl_pinjam =='') or ($tgl_harus_kembali =='') ){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into pinjam VALUES ('".$no_pinjam."','".$kd_petugas."','".$kd_anggota."','".$tgl_pinjam."','".$tgl_harus_kembali."' )") or die(mysql_error());
          $alert='Ditambahkan';
          if($sql_aksi)
          {
            echo'<div class="alert alert-success">Data Berhasil di simpan!</div>';
            echo '<script>window.location = "index.php?page=peminjaman&aksi=detail&kodep='.$no_pinjam.'&km='.$kd_anggota.'";</script>';
            }
            else
            {
            echo'<div class="alert alert-warning">Data gagal di simpan !</div>';
          }

      }
    }
      else
      {
    echo '<div class="alert alert-info">inputkan data pinjam !</div>';
  }
 ?>
<!-- Main content -->
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-primary">
<div class="box-header with-border">
  <h3 class="box-title">Halaman Peminjaman <div id="clock"></div></h3>
</div>
<!-- /.box-header -->
<!-- form start -->
  <div class="box-body">
    <div class="col-md-5">
      <input id="input-kd-anggota" name="kd_anggota" type="name" class="form-control" id="kd_anggota" placeholder="Input No Anggota">
    </div>

    <div class="row-mid">
      <input id="button-load-peminjaman-form-detail" type="submit" class="btn btn-primary" value="proses">
    </div>
    <div id="halaman-load-peminjaman-form">

    </div>
  </div>
  <div class="box-body">
    <div class="box-footer"> </div>
  </div>

<!-- /.box -->
