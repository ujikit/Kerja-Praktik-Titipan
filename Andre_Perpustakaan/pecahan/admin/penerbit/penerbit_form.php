<?php 
include '../config.php';
  if(isset($_POST['simpan']))
      {
        $kd_penerbit = $_POST['kd_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_penerbit =='') or ($nama_penerbit =='') or ($alamat =='') or ($telp =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into penerbit VALUES ('".$kd_penerbit."','".$nama_penerbit."','".$alamat."','".$telp."')") or die(mysql_error());
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
    echo '<div class="alert alert-info">inputkan data penerbit !</div>';
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
              <h3 class="box-title">Form penerbit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                    <div class="form-group">
                          <label >Kode Penerbit</label>
                          <input  name="kd_penerbit" type="name" class="form-control" id="kd_penerbit" placeholder="Kode Penerbit">
                    </div>

                    <div class="form-group">
                          <label >Nama Penerbit</label>
                          <input name="nama_penerbit" type="name" class="form-control" id="nama_penerbit" placeholder="Nama Penerbit">
                    </div>

                    <div class="form-group">
                       <label> Alamat</label> 
                       <textarea name="alamat" class="form-control" rows="5" id="alamat" placeholder="Alamat"> </textarea>
                    </div>

                    <div class="form-group">
                          <label >Nomer Telpon</label>
                          <input name="telp" type="text" class="form-control" id="telp" placeholder="Nomer Telpon" >
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                          <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>

            </form>
          </div>
          <!-- /.box -->