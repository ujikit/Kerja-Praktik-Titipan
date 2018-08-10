<?php 
include '../config.php';
  if(isset($_POST['simpan']))
      {
        $kd_klasifikasi = $_POST['kd_klasifikasi'];
        $nama_klasifikasi = $_POST['nama_klasifikasi'];
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_klasifikasi =='') or ($nama_klasifikasi =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into klasifikasi VALUES ('".$kd_klasifikasi."','".$nama_klasifikasi."')") or die(mysql_error());
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
    echo '<div class="alert alert-info">inputkan data klasifikasi !</div>';
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
              <h3 class="box-title">Form Klasifikasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                    <div class="form-group">
                          <label >Kode Klasifikasi</label>
                          <input  name="kd_klasifikasi" type="name" class="form-control" id="kd_klasifikasi" placeholder="Kode Klasifikasi">
                    </div>

                    <div class="form-group">
                          <label >Nama Klasifikasi</label>
                          <input name="nama_klasifikasi" type="name" class="form-control" id="nama_klasifikasi" placeholder="Nama Klasifikasi">
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                          <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>

            </form>
          </div>
          <!-- /.box -->