
<?php 
include '../config.php';
  if(isset($_POST['simpan']))
      {
        $kd_petugas = $_POST['kd_petugas'];
        $nama_petugas = $_POST['nama_petugas'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $user_login = $_POST['user_login'];
        $pwd_login = $_POST['pwd_login'];
        $stts = $_POST['stts'];

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_petugas =='') or ($nama_petugas =='') or ($jk =='') or ($alamat =='') or ($telp =='') or ($user_login =='') or ($pwd_login =='') or ($stts =='') ){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into petugas VALUES ('".$kd_petugas."','".$nama_petugas."','".$jk."','".$alamat."','".$telp."','".$user_login."' ,'".$pwd_login."' ,'".$stts."' )") or die(mysql_error());
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
    echo '<div class="alert alert-info">inputkan data petugas !</div>';
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
              <h3 class="box-title">Form Petugas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label >Kode Petugas</label>
                  <input  name="kd_petugas" type="name" class="form-control" id="kd_petugas" placeholder="Kode Petugas">
                </div>

                <div class="form-group">
                  <label >Nama Petugas</label>
                  <input name="nama_petugas" type="name" class="form-control" id="nama_petugas" placeholder="Nama Petugas">
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


                <div class="form-group">
                   <label> Alamat</label> 
                   <textarea name="alamat" class="form-control" rows="5" id="alamat" placeholder="Alamat"> </textarea>
               </div>

                <div class="form-group">
                  <label >Nomer Telpon</label>
                  <input name="telp" type="name" class="form-control" id="telp" placeholder="Nomer Telpon">
                </div>

                <div class="form-group">
                  <label >username </label>
                  <input name="user_login"  type="name" class="form-control" id="user_login" placeholder="username ">
                </div>

                <div class="form-group">
                  <label >Password </label>
                  <input name="pwd_login" type="password" class="form-control" id="pwd_login" placeholder="Password ">
                </div>

                 <div class="form-group">
                  <label >Status</label>
                  <input name="stts" type="name" class="form-control" id="stts" placeholder="Status">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
              </div>
              <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" class="btn btn-primary" value="simpan" name="simpan">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </form>
          </div>
          <!-- /.box -->
