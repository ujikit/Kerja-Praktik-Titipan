    <?php 
      $id = $_GET['id'];
      $sql = mysql_query("SELECT * FROM rak_buku where kd_klasifikasi='".$id."'");
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
              <h3 class="box-title">Form Rak Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                  <div class="form-group">
                      <label >Kode Rak</label>
                      <input readonly  name="kd_rak" type="name" class="form-control" id="kd_rak" placeholder="Kode rak" value="<?php echo $tampil['kd_rak']; ?>">
                  </div>

                  <div class="form-group">
                      <label >Lokasi</label>
                      <input name="lokasi" type="name" class="form-control" id="lokasi" placeholder="Lokasi" value="<?php echo $tampil['lokasi']; ?>">
                  </div>

                  <div class="form-group">
                      <label >Nama Rak</label>
                      <input name="nama_rak" type="name" class="form-control" id="nama_rak" placeholder="Nama rak" value="<?php echo $tampil['nama_rak']; ?>">
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
        $kd_rak = $_POST['kd_rak'];
        $lokasi = $_POST['lokasi'];
        $nama_rak = $_POST['nama_rak'];
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_rak =='') or ($lokasi =='') or ($nama_rak =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          //echo("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ");
          $sql_aksi=mysql_query("UPDATE rak_buku set lokasi='$lokasi' , nama_rak='$nama_rak' WHERE  kd_rak='$kd_rak' ") or die(mysql_error());
         
            if($sql_aksi)
              {
                echo'<script type="text/javascript">window.location="?page=rak_buku&aksi=view&stts=1";</script>';
              }
              else
              {
                echo'<script type="text/javascript">window.location="?page=rak_buku&aksi=view&stts=2";</script>';
              }

          }
        }
  ?>