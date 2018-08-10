<?php 
session_start();
include "koneksi.php";

if (!isset($_SESSION['admin'])) 
{
   echo "<script>alert('Anda harus login');</script>";
   echo "<script>location='login.php';</script>";
   header('location:login.php');
   exit();
}



 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Pendaftaran PKL</title>
  <!-- BOOTSTRAP STYLES-->

  
    <link href="assets2/css/bootstrap.css" rel="stylesheet" /><!-- 

    <link href="assets/dataTables/datatables.min.css" rel="stylesheet" /> -->
    <link href="assets2/css/custom.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets2/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets2/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets2/js/dataTables/dataTables.bootstrap.css" rel="stylesheet " />
 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Administrator</a> 
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"> 
                &nbsp;
                
                &nbsp;
                <a href="#" class="btn btn-default cirle-btn-adjust"><li class="fa fa-sign-out"></li>Profile</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side hidden-print" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li><a href="index.php"><i class="fa fa-dashboard fa-2x"></i> Home</a></li>
                <li><a href="index.php?halaman=pendaftaran"><i class="fa fa-inbox fa-2x"></i> Pendaftaran</a></li>
                <li><a href="index.php?halaman=disposisi"><i class="fa fa-inbox fa-2x"></i> Disposisi</a></li>
                <li><a href="index.php?halaman=pembimbing"><i class="fa fa-inbox fa-2x"></i> Pembimbing</a></li>
                <li><a href="index.php?halaman=bidang"><i class="fa fa-inbox fa-2x"></i> Bidang</a></li>
                <li><a href="index.php?halaman=jurusan"><i class="fa fa-inbox fa-2x"></i> Jurusan</a></li>
                <li><a href="index.php?halaman=info"><i class="fa fa-inbox fa-2x"></i> info</a></li>
                <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out fa-2x"></i> Logout</a></li>
                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman'])) 
                {
                    if ($_GET['halaman']=="pendaftaran") {
                        include 'pendaftaran.php';
                    }
                    elseif ($_GET['halaman']=="disposisi") {
                        include 'disposisi.php';
                    }
                    elseif ($_GET['halaman']=="pembimbing") {
                        include 'pembimbing.php';
                    }
                    elseif ($_GET['halaman']=="bidang") {
                        include 'bidang.php';
                    }
                    elseif ($_GET['halaman']=="jurusan") {
                        include 'jurusan.php';
                    }
                    elseif ($_GET['halaman']=="info") {
                        include 'info.php';
                    }
                    elseif ($_GET['halaman']=="logout") {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="tambahdaftar") {
                        include 'tambahdaftar.php';
                    }
                    elseif ($_GET['halaman']=="editdaftar") {
                        include 'editdaftar.php';
                    }
                    elseif ($_GET['halaman']=="hapusdaftar") {
                        include 'hapusdaftar.php';
                    }
                     elseif ($_GET['halaman']=="tambahdisposisi") {
                        include 'tambahdisposisi.php';
                    }
                    elseif ($_GET['halaman']=="editdisposisi") {
                        include 'editdisposisi.php';
                    }
                    elseif ($_GET['halaman']=="hapusdisposisi") {
                        include 'hapusdisposisi.php';
                    }
                     elseif ($_GET['halaman']=="tambahpembimbing") {
                        include 'tambahpembimbing.php';
                    }
                    elseif ($_GET['halaman']=="editpembimbing") {
                        include 'editpembimbing.php';
                    }
                    elseif ($_GET['halaman']=="hapuspembimbing") {
                        include 'hapuspembimbing.php';
                    }
                    elseif ($_GET['halaman']=="tambahbidang") {
                        include 'tambahbidang.php';
                    }
                    elseif ($_GET['halaman']=="editbidang") {
                        include 'editbidang.php';
                    }
                    elseif ($_GET['halaman']=="hapusbidang") {
                        include 'hapusbidang.php';
                    }
                    elseif ($_GET['halaman']=="tambahjurusan") {
                        include 'tambahjurusan.php';
                    }
                    elseif ($_GET['halaman']=="editjurusan") {
                        include 'editjurusan.php';
                    }
                    elseif ($_GET['halaman']=="hapusjurusan") {
                        include 'hapusjurusan.php';
                    }
                     elseif ($_GET['halaman']=="tambahinfo") {
                        include 'tambahinfo.php';
                    }
                    elseif ($_GET['halaman']=="editinfo") {
                        include 'editinfo.php';
                    }
                    elseif ($_GET['halaman']=="hapusinfo") {
                        include 'hapusinfo.php';
                    }
                }                
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

     <!-- /. WRAPPER  -->
     <!-- Bagian footer -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets2/js/jquery-1.10.2.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>

    <script src="assets2/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets2/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets2/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatables').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets2/js/custom.js"></script>

     <!-- MORRIS CHART SCRIPTS -->
   <!--  <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script> -->
</body>
</html>