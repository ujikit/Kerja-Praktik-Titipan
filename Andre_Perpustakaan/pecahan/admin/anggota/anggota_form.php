
<?php 
include '../config.php';
  if(isset($_POST['simpan']))
      {
        $kd_anggota = $_POST['kd_anggota'];
        $nama_anggota = $_POST['nama_anggota'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $stts = $_POST['stts'];
        $keterangan = $_POST['keterangan'];
        $tgl_daftar = $_POST['tgl_daftar'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_anggota =='') or ($nama_anggota =='') or ($jk =='') or ($alamat =='') or ($no_telp =='') or ($stts =='') or ($keterangan =='') or ($tgl_daftar =='') or ($username =='') or ($password =='')  ){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into anggota VALUES ('".$kd_anggota."','".$nama_anggota."','".$jk."','".$alamat."','".$no_telp."','".$stts."','".$keterangan."','".$tgl_daftar."','".$username."','".$password."' )") or die(mysql_error());
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
    echo '<div class="alert alert-info">inputkan data anggota !</div>';
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
              <h3 class="box-title">Form Anggota</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label >Kode Anggota</label>
                  <input  name="kd_anggota" type="name" class="form-control" id="kd_anggota" placeholder="Kode Anggota">
                </div>

                <div class="form-group">
                  <label >Nama Anggota</label>
                  <input name="nama_anggota" type="name" class="form-control" id="nama_anggota" placeholder="Nama Anggota">
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
                  <input name="no_telp" type="name" class="form-control" id="no_telp" placeholder="Nomer Telpon">
                </div>

                 <div class="form-group">
                  <label >Status</label>
                  <input name="stts" type="name" class="form-control" id="stts" placeholder="Status">
                </div>

                <div class="form-group">
                  <label >Keterangan</label>
                  <input name="keterangan"  type="name" class="form-control" id="keterangan" placeholder="Keterangan">
                </div>

                <div class="form-group">
                <label>Tanggal Daftar</label>
                   <input name="tgl_daftar" type="date" class="form-control" placeholder="Tanggal Daftar" required>
                </div>

                 <div class="form-group">
                  <label >username</label>
                  <input name="username"  type="name" class="form-control" id="username" placeholder="username">
                </div>

                <div class="form-group">
                  <label >Password </label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Password">
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
