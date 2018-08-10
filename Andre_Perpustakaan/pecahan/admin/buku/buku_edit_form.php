<?php 
      $id = $_GET['id'];
      $sql = mysql_query("SELECT * FROM buku where kd_buku='".$id."'");
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
              <h3 class="box-title">Form Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label >Kode Buku</label>
                  <input  name="kd_buku" type="name" class="form-control" id="kd_buku" placeholder="Kode buku" value="<?php echo $tampil['kd_buku']; ?>">
                </div>

                <div class="form-group">
                  <label >Judul</label>
                  <input name="judul" type="name" class="form-control" id="judul" placeholder="Judul" value="<?php echo $tampil['judul']; ?>">
                </div>

                <div class="form-group">
                   <label>Pengarang</label> 
                        <select class="form-control" name="pengarang" id="pengarang">
                          <option>-- Pilih --</option>
                          <?php
                          $q_pengarang=mysql_query("SELECT kd_pengarang, nama_pengarang FROM pengarang");
                          while ($data=mysql_fetch_array($q_pengarang)) {?>
                            <option value="<?php echo $data['kd_pengarang'] ?>"><?php echo $data['nama_pengarang'] ?></option>
                          <?php }?>
                        </select>
               </div>

               <div class="form-group">
                   <label>Penerbit</label> 
                        <select class="form-control" name="penerbit" id="penerbit">
                          <option>-- Pilih --</option>
                          <?php
                          $q_penerbit=mysql_query("SELECT kd_penerbit, nama_penerbit FROM penerbit");
                          while ($data=mysql_fetch_array($q_penerbit)) {?>
                            <option value="<?php echo $data['kd_penerbit'] ?>"><?php echo $data['nama_penerbit'] ?></option>
                          <?php }?>
                        </select>
               </div>

                 <div class="form-group">
                   <label>Klasifikasi</label> 
                        <select class="form-control" name="klasifikasi" id="klasifikasi">
                          <option>-- Pilih --</option>
                          <?php
                          $q_klasifikasi=mysql_query("SELECT kd_klasifikasi, nama_klasifikasi FROM klasifikasi");
                          while ($data=mysql_fetch_array($q_klasifikasi)) {?>
                            <option value="<?php echo $data['kd_klasifikasi'] ?>"><?php echo $data['nama_klasifikasi'] ?></option>
                          <?php }?>
                        </select>
               </div>

                <div class="form-group">
                   <label>Rak Buku</label> 
                        <select class="form-control" name="rak_buku" id="rak_buku">
                          <option>-- Pilih --</option>
                          <?php
                          $q_rak_buku=mysql_query("SELECT kd_rak, nama_rak FROM rak_buku");
                          while ($data=mysql_fetch_array($q_rak_buku)) {?>
                            <option value="<?php echo $data['kd_rak'] ?>"><?php echo $data['nama_rak'] ?></option>
                          <?php }?>
                        </select>
               </div>

                <div class="form-group">
                  <label >Tahun Terbit</label>
                  <input name="thn_terbit" type="name" class="form-control" id="thn_terbit" placeholder="Tahun Terbit" value="<?php echo $tampil['kd_klasifikasi']; ?>">
                </div>

                 <div class="form-group">
                  <label >Bahasa</label>
                  <input name="bahasa" type="name" class="form-control" id="bahasa" placeholder="Bahasa" value="<?php echo $tampil['bahasa']; ?>">
                </div>

                <div class="form-group">
                  <label >Edisi</label>
                  <input name="edisi"  type="name" class="form-control" id="edisi" placeholder="Edisi" value="<?php echo $tampil['edisi']; ?>">
                </div>

                <div class="form-group">
                  <label >ISBN</label>
                  <input name="isbn"  type="name" class="form-control" id="isbn" placeholder="ISBN" value="<?php echo $tampil['isbn']; ?>">
                </div>

                <div class="form-group">
                  <label >Jumlah</label>
                  <input name="jumlah"  type="name" class="form-control" id="jumlah" placeholder="Jumlah" value="<?php echo $tampil['jumlah']; ?>">
                </div>

                 <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>

              <div class="box-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
 	<?php } ?>
            </form>
          </div>
          <!-- /.box -->

<?php if(isset($_POST['simpan']))
      {
        $kd_buku = $_POST['kd_buku'];
        $judul = $_POST['judul'];
        $kd_pengarang = $_POST['kd_pengarang'];
        $kd_penerbit = $_POST['kd_penerbit'];
        $kd_klasifikasi = $_POST['kd_klasifikasi'];
        $kd_rak = $_POST['kd_rak'];
        $thn_terbit = $_POST['thn_terbit'];
        $bahasa = $_POST['bahasa'];
        $edisi = $_POST['edisi'];
        $isbn = $_POST['isbn'];
        $jumlah = $_POST['jumlah'];

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_buku =='') or ($judul =='') or ($kd_pengarang =='') or ($kd_penerbit =='') or ($kd_klasifikasi =='') or ($kd_rak =='') or ($thn_terbit =='') or ($bahasa =='') or ($edisi =='') or ($isbn =='') or ($jumlah =='') ){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          //echo("UPDATE penerbit set nama_penerbit='$nama_penerbit' , alamat='$alamat' , telp='$telp' WHERE  kd_penerbit='$kd_penerbit' ");
          $sql_aksi=mysql_query("UPDATE buku set judul='$judul' , kd_pengarang='$kd_pengarang' , kd_penerbit='$kd_penerbit' , kd_klasifikasi='$kd_klasifikasi' , kd_rak='$kd_rak' , thn_terbit='$thn_terbit' , bahasa='$bahasa' , edisi='$edisi' , isbn='$isbn' , jumlah='$jumlah' WHERE  kd_buku='$kd_buku' ") or die(mysql_error());
         
            if($sql_aksi)
              {
                echo'<script type="text/javascript">window.location="?page=buku&aksi=view&stts=1";</script>';
              }
              else
              {
                echo'<script type="text/javascript">window.location="?page=buku&aksi=view&stts=2";</script>';
              }

          }
        }
  ?>