    <?php 
      $id = $_GET['id'];
      $sql = mysql_query("SELECT * FROM klasifikasi where kd_klasifikasi='".$id."'");
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
              <h3 class="box-title">Form klasifikasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                  <div class="form-group">
                      <label >Kode Klasifikasi</label>
                      <input readonly  name="kd_klasifikasi" type="name" class="form-control" id="kd_klasifikasi" placeholder="Kode klasifikasi" value="<?php echo $tampil['kd_klasifikasi']; ?>">
                  </div>

                  <div class="form-group">
                      <label >Nama Klasifikasi</label>
                      <input name="nama_klasifikasi" type="name" class="form-control" id="nama_klasifikasi" placeholder="Nama Klasifikasi" value="<?php echo $tampil['nama_klasifikasi']; ?>">
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
        $kd_klasifikasi = $_POST['kd_klasifikasi'];
        $nama_klasifikasi = $_POST['nama_klasifikasi'];
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_klasifikasi =='') or ($nama_klasifikasi =='')){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          //echo("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ");
          $sql_aksi=mysql_query("UPDATE klasifikasi set nama_klasifikasi='$nama_klasifikasi' WHERE  kd_klasifikasi='$kd_klasifikasi' ") or die(mysql_error());
         
            if($sql_aksi)
              {
                echo'<script type="text/javascript">window.location="?page=klasifikasi&aksi=view&stts=1";</script>';
              }
              else
              {
                echo'<script type="text/javascript">window.location="?page=klasifikasi&aksi=view&stts=2";</script>';
              }

          }
        }
  ?>