<?php 
include '../config.php';
  if(isset($_POST['simpan']))
      {
        $kd_pengarang = $_POST['kd_pengarang'];
        $nama_pengarang = $_POST['nama_pengarang'];
        $jk = $_POST['jk'];

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_pengarang =='') or ($nama_pengarang =='') or ($jk =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into pengarang VALUES ('".$kd_pengarang."','".$nama_pengarang."','".$jk."')") or die(mysql_error());
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
    echo '<div class="alert alert-info">inputkan data pengarang !</div>';
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
              <h3 class="box-title">Form Pengarang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                    <div class="form-group">
                          <label >Kode Pengarang</label>
                          <input  name="kd_pengarang" type="name" class="form-control" id="kd_pengarang" placeholder="Kode Pengarang">
                    </div>

                    <div class="form-group">
                          <label >Nama Pengarang</label>
                          <input name="nama_pengarang" type="name" class="form-control" id="nama_pengarang" placeholder="Nama Pengarang">
                    </div>

                    <div class="form-group">
                         <label for="jk">Jenis Kelamin:</label><br>
                            <div class="radio-inline">
                                <input type="radio" name="jk" value="L"> Laki-Laki
                            </div> 
                            <div class="radio-inline">
                                  <input type="radio" name="jk" value="P"> Perempuan
                            </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                          <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>

            </form>
          </div>
          <!-- /.box -->