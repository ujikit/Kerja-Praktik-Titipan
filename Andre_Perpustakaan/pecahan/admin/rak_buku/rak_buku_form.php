<?php 
include '../config.php';
  if(isset($_POST['simpan']))
      {
        $kd_rak = $_POST['kd_rak'];
        $lokasi = $_POST['lokasi'];
        $nama_rak = $_POST['nama_rak'];
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_rak =='') or ($lokasi =='') or ($nama_rak =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into rak_buku VALUES ('".$kd_rak."','".$lokasi."','".$nama_rak."')") or die(mysql_error());
          $alert='Ditambahkan';
          if($sql_aksi)
          {
            echo'<div class="alert alert-success">Data Berhasil di simpan!</div>';
            }
            else
            {
            echo'<div class="alert alert-warning">Data gagal di simpan !</div>';
          }

      }
    }
      else
      {
    echo '<div class="alert alert-info">inputkan data rak_buku !</div>';
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
              <h3 class="box-title">Form Rak Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                    <div class="form-group">
                          <label >Kode Rak</label>
                          <input  name="kd_rak" type="name" class="form-control" id="kd_rak" placeholder="Kode Rak">
                    </div>

                    <div class="form-group">
                          <label >Lokasi</label>
                          <input name="lokasi" type="name" class="form-control" id="lokasi" placeholder="Lokasi">
                    </div>

                    <div class="form-group">
                          <label >Nama Rak</label>
                          <input name="nama_rak" type="name" class="form-control" id="nama_rak" placeholder="Nama Rak">
                    </div>
                    
                    <!-- /.box-body -->
                    <div class="box-footer">
                          <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>

            </form>
          </div>
          <!-- /.box -->