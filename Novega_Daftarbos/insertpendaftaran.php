<?php 
include "admin/koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>WEBSITE PENDAFTARAN PKL</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
  <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>
  <link rel='stylesheet' src="assets/js/sweetalert2/dist/sweetalert2.min.css"> 
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
  <div class="navbar navbar-inverse">
   <div class="container">
    <div class="navbar-header">
      <!-- Button for smallest screens -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./" style="color:red">
        <p></p>	WEBSITE PENDAFTARAN </span></p></a> 
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right mainNav">
         <li class="c1"><a href="./"><span class="fa fa-home"></span> Home</a></li>
         <li class="c2"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>
         <li class="c3 active"><a href="insertpendaftaran.php"><span class="fa fa-pencil"></span> Pendaftaran</a></li>
         <li class="c4"><a href="infoberita.php"><span class="fa fa-info"></span> Info</a></li>
         
         <li class="c7"><a href="admin"><span class="fa fa-lock"></span> Login</a></li>

       </ul>
     </div>
     <!--/.nav-collapse -->
   </div>
 </div>
 <!-- /.navbar -->

 <!-- Header -->
 
 <!-- /Header -->

 <div id="loadHalaman">
  <div class="container">
    <div class="row">
      <form id="form-pendaftaran" method="post" action="insertpendaftaran.php" enctype="multipart/form-data">
        <div class="col-md-12">
          <div class="grey-box-icon b4">  
            <h4 class="modal-title" id="myModalLabel">Tambah Data pendaftar</h4>
            <div class="area-loading"></div>
          </div>
          <div class="modal-body">
            <table class="table " width="100%">
              <h2>Tambah Data</h2>

              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nim</label>
                  <input type="text" class="form-control" name="nim">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select id="jenis_kel" name="jenis_kel"  class="form-control" >
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Sekolah</label>
                  <input type="text" class="form-control" name="sekolah">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="photo">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="9"></textarea>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="form-control" name="status_sekarang">
                </div>
                <div class="form-group">
                  <label>Handphone</label>
                  <input type="text" class="form-control" name="nohp">
                </div>
                
                
                <button class="btn btn-primary" name="save">Simpan</button>
              </form>
              <?php  
              if (isset($_POST['save'])) {
                $nama = $_FILES['photo']['name'];
                $lokasi = $_FILES['photo']['tmp_name'];
                move_uploaded_file($lokasi, "admin/img/".$nama);
                $koneksi->query("INSERT INTO Pendaftaran
                  (nim,nama,jenis_kel,sekolah,email,photo,tempat_lahir,tgl_lahir,alamat,status_sekarang,nohp)
                  VALUES(
                  '$_POST[nim]',
                  '$_POST[nama]',
                  '$_POST[jenis_kel]',
                  '$_POST[sekolah]',
                  '$_POST[email]',
                  '$nama', 
                  '$_POST[tempat_lahir]',
                  '$_POST[tgl_lahir]',
                  '$_POST[alamat]',
                  '$_POST[status_sekarang]',
                  '$_POST[nohp]')");

                $ambilNIM=$_POST['nim'];

                echo "<script>alert('Data Tersimpan ');</script>";
                echo "<meta http-equiv='refresh' content='1;url=insertdisposisi.php?nim=".$ambilNIM."'>";
              }
              ?>

            </table>
            *) Foto Di Tempel sesudah anda mengisi semua form Dengan Benar dan Anda di terima dalam tahap seleksi <br>
            *) Jika anda Anda bingung harap meminta bantuan Panitia PSB <br>
            *) Dengan Mengisi semua form anda akan menjadi Calon siswa dan akan menunggu beberapa hari untuk pengumuman hasil seleksi

          </div>
          <div class="modal-footer">
          </div><!--grey box -->
        </div><!--/span3-->
      </form>
    </div>
  </div>
</div>
<section class="news-box top-margin"></section>






<footer id="footer">
 
  <div class="container">
   <div class="row">
    <div class="footerbottom">

      <div class="col-md-12 col-sm-7"> 
       <div class="footerwidget"> 
         <h4>Contact</h4> 
         <p>Hubungi Kami Jika ada Masalah</p>
         <div class="contact-info"> 
          <i class="fa fa-map-marker"></i> Contact<br>
          <i class="fa fa-phone"></i>+81262612222 <br>
          <i class="fa fa-envelope-o"></i> example@gmail.com
        </div> 
      </div><!-- end widget --> 
    </div>
  </div>
</div>
<div class="social text-center">
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <a href="#"><i class="fa fa-pencil"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-instagram"></i></a>
</div>

<div class="clear"></div>
<!--CLEAR FLOATS-->
</div>
<div class="footer2">
 <div class="container">
  <div class="row">

    

   <div class="col-md-12 panel">
    <div class="panel-body">
     <p class="text-right">
      Copyright &copy;
    </p>
  </div>
</div>

</div>
<!-- /row of panels -->
</div>
</div>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<!-- <script src="assets/js/modernizr-latest.js"></script>  -->
<script type="text/javascript" src="assets/js/jquery_2.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script> -->

<!-- <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script> -->
<!-- <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>  -->
<!-- <script type='text/javascript' src='assets/js/camera.min.js'></script>  -->
<!-- <script src="assets/js/bootstrap.min.js"></script>  -->
<!-- <script src="assets/js/custom.js"></script> -->

</body>
</html>
