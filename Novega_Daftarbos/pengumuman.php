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
          <p></p> WEBSITE PENDAFTARAN </span></p></a> 
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
                <h4 class="modal-title" id="myModalLabel">Info Pengumuman</h4>
                <div class="area-loading"></div>
              </div>
              <div class="modal-body">
                <table class="table " width="100%">
                  <h2>Data Pendaftaran</h2>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="datatables">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIM</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th>Sekolah</th>
                              <th>Photo</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal Lahir</th>
                              <th>Nama Jurusan</th>
                              <th>Nama Pembimbing</th>
                              <th>Nama Bidang</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php $nomor=1; ?>
                            <?php $ambil=$koneksi->query("SELECT pendaftaran.nim,pendaftaran.nama, pendaftaran.jenis_kel, pendaftaran.sekolah, pendaftaran.email, pendaftaran.photo, pendaftaran.tempat_lahir, pendaftaran.tgl_lahir, jurusan.nama_jurusan, bidang.nama_bidang,pembimbing.nama_pembimbing FROM `disposisi`, pendaftaran, jurusan, bidang, pembimbing WHERE disposisi.nim=pendaftaran.nim AND disposisi.id_bidang=bidang.id_bidang AND disposisi.id_jurusan=jurusan.id_jurusan AND disposisi.id_pembimbing = pembimbing.id_pembimbing "); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()){ ?>
                              <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nim']; ?></td>
                                <td><?php echo $pecah['nama']; ?></td>
                                <td><?php echo $pecah['jenis_kel']; ?></td>
                                <td><?php echo $pecah['sekolah']; ?></td>

                                <td>
                                  <img src="admin/img/<?php echo $pecah['photo']; ?>" width="100">
                                </td>
                                <td><?php echo $pecah['tempat_lahir']; ?></td>
                                <td><?php echo $pecah['tgl_lahir']; ?></td>
                                <td><?php echo $pecah['nama_jurusan']; ?></td>
                                <td><?php echo $pecah['nama_pembimbing']; ?></td>
                                <td><?php echo $pecah['nama_bidang']; ?></td>

                              </tr>
                              <?php $nomor++; ?>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <a href="" onclick="window.print();" class="btn btn-default hidden-print"><i class="fa fa-print"></i> Cetak</a>

                </table>


              </div>
              <div class="modal-footer">
              </div><!--grey box -->
            </div><!--/span3-->
          </form>
        </div>
      </div>
    </div>
    <section class="news-box top-margin"></section>

    <footer class="hidden-print" id="footer">

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
