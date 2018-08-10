    <?php 
      $id = $_GET['id'];
      $sql = mysql_query("SELECT * FROM pengarang where kd_pengarang='".$id."'");
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
              <h3 class="box-title">Form Pengarang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                  <div class="form-group">
                      <label >Kode Pengarang</label>
                      <input readonly  name="kd_pengarang" type="name" class="form-control" id="kd_pengarang" placeholder="Kode Pengarang" value="<?php echo $tampil['kd_pengarang']; ?>">
                  </div>

                  <div class="form-group">
                      <label >Nama Pengarang</label>
                      <input name="nama_pengarang" type="name" class="form-control" id="nama_pengarang" placeholder="Nama Pengarang" value="<?php echo $tampil['nama_pengarang']; ?>">
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

              <!-- /.box-body -->
                  <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  </div>
      <?php } ?>
            </form>
          </div>
          <!-- /.box -->
<?php if(isset($_POST['simpan']))
      {
        $kd_pengarang = $_POST['kd_pengarang'];
        $nama_pengarang = $_POST['nama_pengarang'];
        $jk = $_POST['jk'];

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_pengarang =='') or ($nama_pengarang =='') or ($jk =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          //echo("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ");
          $sql_aksi=mysql_query("UPDATE pengarang set nama_pengarang='$nama_pengarang' , jk='$jk' WHERE  kd_pengarang='$kd_pengarang' ") or die(mysql_error());
         
            if($sql_aksi)
              {
                echo'<script type="text/javascript">window.location="?page=pengarang&aksi=view&stts=1";</script>';
              }
              else
              {
                echo'<script type="text/javascript">window.location="?page=pengarang&aksi=view&stts=2";</script>';
              }

          }
        }
  ?>