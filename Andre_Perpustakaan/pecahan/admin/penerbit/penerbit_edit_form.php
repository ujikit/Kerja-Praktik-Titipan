    <?php 
      $id = $_GET['id'];
      $sql = mysql_query("SELECT * FROM penerbit where kd_penerbit='".$id."'");
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
              <h3 class="box-title">Form penerbit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
              <div class="box-body">
                  <div class="form-group">
                      <label >Kode Penerbit</label>
                      <input readonly  name="kd_penerbit" type="name" class="form-control" id="kd_penerbit" placeholder="Kode Penerbit" value="<?php echo $tampil['kd_penerbit']; ?>">
                  </div>

                  <div class="form-group">
                      <label >Nama Penerbit</label>
                      <input name="nama_penerbit" type="name" class="form-control" id="nama_penerbit" placeholder="Nama Penerbit" value="<?php echo $tampil['nama_penerbit']; ?>">
                  </div>

                  <div class="form-group">
                       <label> Alamat</label> 
                       <textarea name="alamat" class="form-control" rows="5" id="alamat" placeholder="Alamat"><?php echo $tampil['alamat']; ?></textarea>
                  </div>

                  <div class="form-group">
                      <label >Nomer Telpon</label>
                      <input type="text" >
                      <input name="telp" type="name" class="form-control" id="telp" placeholder="Nomer Telpon" class="input-medium bfh-phone" data-format="
                      (ddd) ddd-dddd" value="<?php echo $tampil['telp']; ?>">
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
          //echo("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ");
          $sql_aksi=mysql_query("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ") or die(mysql_error());
         
            if($sql_aksi)
              {
                echo'<script type="text/javascript">window.location="?page=penerbit&aksi=view&stts=1";</script>';
              }
              else
              {
                echo'<script type="text/javascript">window.location="?page=penerbit&aksi=view&stts=2";</script>';
              }

          }
        }
  ?>