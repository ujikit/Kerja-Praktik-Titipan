    <?php 
      $id = $_GET['id'];
      $sql = mysql_query("SELECT * FROM anggota where kd_anggota='".$id."'");
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
              <h3 class="box-title">Form Anggota</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <form role="form" method="POST">
                      <div class="box-body">
                          <div class="form-group">
                              <label >Kode Anggota</label>
                              <input  name="kd_anggota" type="name" class="form-control" id="kd_anggota" placeholder="Kode Anggota" value="<?php echo $tampil['kd_anggota']; ?>">
                          </div>

                          <div class="form-group">
                              <label >Nama Anggota</label>
                              <input name="nama_anggota" type="name" class="form-control" id="nama_anggota" placeholder="Nama Anggota" value="<?php echo $tampil['nama_anggota']; ?>">
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
                              <input name="no_telp" type="name" class="form-control" id="no_telp" placeholder="Nomer Telpon" value="<?php echo $tampil['no_telp']; ?>">
                          </div>

                          <div class="form-group">
                              <label >Status</label>
                              <input name="stts" type="name" class="form-control" id="stts" placeholder="Status" value="<?php echo $tampil['stts']; ?>">
                          </div>

                          <div class="form-group">
                              <label >Keterangan</label>
                              <input name="keterangan"  type="name" class="form-control" id="keterangan" placeholder="Keterangan" value="<?php echo $tampil['keterangan']; ?>">
                          </div>

                          <div class="form-group">
                               <label>Tanggal Daftar</label>
                               <input name="tgl_daftar" type="date" class="form-control" placeholder="Tanggal Daftar" value="<?php echo $tampil['tgl_daftar']; ?>" >
                          </div>

                           <div class="form-group">
                                <label >username</label>
                                <input name="username"  type="name" class="form-control" id="username" placeholder="username" value="<?php echo $tampil['username']; ?>">
                          </div>

                          <div class="form-group">
                                <label >Password </label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password" 
                                value="<?php echo $tampil['password']; ?>">
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
        $kd_anggota = $_POST['kd_anggota'];
        $nama_anggota = $_POST['nama_anggota'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $stts = $_POST['stts'];
        $keterangan = $_POST['keterangan'];
        $tgl_daftar = $_POST['tgl_daftar'];
        // $tgl_daftar = date("Ymdhis");
        $username = $_POST['username'];
        $password = $_POST['password'];
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_anggota =='') or ($nama_anggota =='') or ($jk =='') or ($alamat =='') or ($no_telp =='') or ($stts =='') or ($keterangan =='') or ($tgl_daftar =='') or ($username =='') or ($password =='') ){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          //echo("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ");
          $sql_aksi=mysql_query("UPDATE anggota set nama_anggota='$nama_anggota' , jk='$jk' , alamat='$alamat' , no_telp='$no_telp' , stts='$stts' , keterangan='$keterangan' , tgl_daftar='$tgl_daftar' , username='$username' , password='$password' WHERE  kd_anggota='$kd_anggota' ") or die(mysql_error());
         
            if($sql_aksi)
              {
                echo'<script type="text/javascript">window.location="?page=anggota&aksi=view&stts=1";</script>';
              }
              else
              {
                echo'<script type="text/javascript">window.location="?page=anggota&aksi=view&stts=2";</script>';
              }

          }
        }
  ?>