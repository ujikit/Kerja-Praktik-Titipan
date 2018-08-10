<?php
include '../config.php';
include 'header.php';

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                      <?php

                        $page = isset($_GET['page']) ? $_GET['page']:'';
                        $aksi = isset($_GET['aksi']) ? $_GET['aksi']:'';

                         //buku
                        if ($page == "buku") {
                          if ($aksi == "") {
                            include "buku/buku_form.php";
                          }else if ($aksi == "view") {
                            include "buku/buku_view.php";
                          }else if ($aksi == "edit") {
                            include "buku/buku_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "buku/buku_hapus.php";
                          }
                        }

                        //Anggota
                        if ($page == "anggota") {
                          if ($aksi == "") {
                            include "anggota/anggota_form.php";
                          }else if ($aksi == "view") {
                            include "anggota/anggota_view.php";
                          }else if ($aksi == "edit") {
                            include "anggota/anggota_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "anggota/anggota_hapus.php";
                          }
                        }


                        //petugas
                        if ($page == "petugas") {
                          if ($aksi == "") {
                            include "petugas/petugas_form.php";
                          }else if ($aksi == "view") {
                            include "petugas/petugas_view.php";
                          }else if ($aksi == "edit") {
                            include "petugas/petugas_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "petugas/petugas_hapus.php";
                          }
                        }



                        //pengarang
                        if ($page == "pengarang") {
                          if ($aksi == "") {
                            include "pengarang/pengarang_form.php";
                          }else if ($aksi == "view") {
                            include "pengarang/pengarang_view.php";
                          }else if ($aksi == "edit") {
                            include "pengarang/pengarang_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "pengarang/pengarang_hapus.php";
                          }
                        }

                        //penerbit
                        if ($page == "penerbit") {
                          if ($aksi == "") {
                            include "penerbit/penerbit_form.php";
                          }else if ($aksi == "view") {
                            include "penerbit/penerbit_view.php";
                          }else if ($aksi == "edit") {
                            include "penerbit/penerbit_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "penerbit/penerbit_hapus.php";
                          }
                        }

                        //klasifikasi
                        if ($page == "klasifikasi") {
                          if ($aksi == "") {
                            include "klasifikasi/klasifikasi_form.php";
                          }else if ($aksi == "view") {
                            include "klasifikasi/klasifikasi_view.php";
                          }else if ($aksi == "edit") {
                            include "klasifikasi/klasifikasi_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "klasifikasi/klasifikasi_hapus.php";
                          }
                        }

                        //penerbit
                        if ($page == "rak_buku") {
                          if ($aksi == "") {
                            include "rak_buku/rak_buku_form.php";
                          }else if ($aksi == "view") {
                            include "rak_buku/rak_buku_view.php";
                          }else if ($aksi == "edit") {
                            include "rak_buku/rak_buku_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "rak_buku/rak_buku_hapus.php";
                          }
                        }

                        //peminjaman
                        if ($page == "peminjaman") {
                          if ($aksi == "") {
                            include "peminjaman/peminjaman_form.php";
                          }else if ($aksi == "detail") {
                            include "peminjaman/detail_peminjaman_form.php";
                          }else if ($aksi == "edit") {
                            include "peminjaman/rak_buku_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "peminjaman/rak_buku_hapus.php";
                          }else if ($aksi == "cari") {
                            include "peminjaman/cari.php";
                          }
                        }

                         //pengembalian
                        if ($page == "pengembalian") {
                          if ($aksi == "") {
                            include "pengembalian/pengembalian_form.php";
                          }else if ($aksi == "view") {
                            include "pengembalian/pengembalian_view.php";
                          }else if ($aksi == "edit") {
                            include "peminjaman/rak_buku_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "peminjaman/rak_buku_hapus.php";
                          }
                        }

                         //peminjaman
                        if ($page == "denda") {
                          if ($aksi == "") {
                            include "denda/denda_form.php";
                          }else if ($aksi == "view") {
                            include "denda/denda_view.php";
                          }else if ($aksi == "edit") {
                            include "peminjaman/rak_buku_edit_form.php";
                          }else if ($aksi == "hapus") {
                            include "peminjaman/rak_buku_hapus.php";
                          }
                        }



                       ?>

                    </div>
                </div>
                 <!-- /. ROW  -->
               <!--   <hr /> -->

    </div>
             <!-- /. PAGE INNER  -->
            </div>
<?php
include 'footer.php';

?>
