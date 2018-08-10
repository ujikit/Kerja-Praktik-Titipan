    <?php 
      $id = $_GET['id'];
      $sql = mysql_query("SELECT * FROM petugas where kd_petugas='".$id."'");
      while ($tampil = mysql_fetch_array($sql)) {
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
                              <input  name="kd_petugas" type="name" class="form-control" id="kd_petugas" placeholder="Kode Petugas" value="<?php echo $tampil['kd_petugas']; ?>">
                          </div>

                          <div class="form-group">
                              <label >Nama Petugas</label>
                              <input name="nama_petugas" type="name" class="form-control" id="nama_petugas" placeholder="Nama Petugas" value="<?php echo $tampil['nama_petugas']; ?>">
                          </div>

                          <div class="form-group">
                               <label for="jk">Jenis Kelamin:</label><br>
                                     <div class="radio-inline">
                                           <input type="radio" name="jk" value="L" <?php if ($tampil['jk']=='L') echo "checked";?>> Laki-Laki
                                      </div> 
                                      <div class="radio-inline">
                                           <input type="radio" name="jk" value="P" <?php if ($tampil['jk']=='P') echo "checked";?>> Perempuan
                                      </div>
                          </div>


                          <div class="form-group">
                               <label> Alamat</label> 
                               <textarea name="alamat" class="form-control" rows="5" id="alamat" placeholder="Alamat" value="<?php echo $tampil['alamat']; ?>"> </textarea>
                          </div>

                          <div class="form-group">
                              <label >Nomer Telpon</label>
                              <input name="telp" type="name" class="form-control" id="telp" placeholder="Nomer Telpon" value="<?php echo $tampil['telp']; ?>">
                          </div>

                          <div class="form-group">
                                <label >username</label>
                                <input name="user_login"  type="name" class="form-control" id="user_login" placeholder="username" value="<?php echo $tampil['user_login']; ?>">
                          </div>

                          <div class="form-group">
                                <label >Password </label>
                                <input name="pwd_login" type="password" class="form-control" id="pwd_login" placeholder="Password" 
                                value="<?php echo $tampil['pwd_login']; ?>">
                          </div>

                          <div class="form-group">
                              <label >Status</label>
                              <input name="stts" type="name" class="form-control" id="stts" placeholder="Status" value="<?php echo $tampil['stts']; ?>">
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
        <?php } ?>
                </form>
          </div>

          <!-- /.box -->
<?php if(isset($_POST['simpan']))
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
          if (($kd_petugas =='') or ($nama_petugas =='') or ($jk =='') or ($alamat =='') or ($telp =='') or ($user_login =='') or ($pwd_login =='') or ($stts =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          //echo("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ");
          $sql_aksi=mysql_query("UPDATE petugas set nama_petugas='$nama_petugas' , jk='$jk' , alamat='$alamat' , telp='$telp' , user_login='$user_login' , pwd_login='$pwd_login' , stts='$stts'  WHERE  kd_petugas='$kd_petugas' ") or die(mysql_error());
         
            if($sql_aksi)
              {
                echo'<script type="text/javascript">window.location="?page=petugas&aksi=view&stts=1";</script>';
              }
              else
              {
                echo'<script type="text/javascript">window.location="?page=petugas&aksi=view&stts=2";</script>';
              }

          }
        }
  ?>