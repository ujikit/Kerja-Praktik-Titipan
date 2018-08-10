
<?php 
include '../config.php';
  if(isset($_POST['simpan']))
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
        //print_r($kd_penerbit.'-'.$nama_pengarang.'-'.$alamat.'-'.$telp);

          // perintah untuk menyimpan ke database tapi di cekal dulu
          if (($kd_buku =='') or ($judul =='') or ($kd_pengarang =='') or ($kd_penerbit =='') or ($kd_klasifikasi =='') or ($kd_rak =='') or ($thn_terbit =='') or ($bahasa =='') or ($edisi =='') or ($isbn =='') or ($jumlah =='')  ){
          echo'<div class="alert alert-danger"><strong>Chek Kembali </strong> Inputan form tidak boleh kosong !</div>';
          }else{

          // proses simpan jika tidak tercekal kondisi
          $sql_aksi=mysql_query("INSERT into buku VALUES ('".$kd_buku."','".$judul."','".$kd_pengarang."','".$kd_penerbit."','".$kd_klasifikasi."','".$thn_terbit."','".$bahasa."','".$edisi."','".$isbn."','".$jumlah."','".$kd_rak."')") or die(mysql_error());
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
    echo '<div class="alert alert-info">inputkan data buku !</div>';
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
              <h3 class="box-title">Form Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label >Kode Buku</label>
                  <input  name="kd_buku" type="name" class="form-control" id="kd_buku" placeholder="Kode buku">
                </div>

                <div class="form-group">
                  <label >Judul</label>
                  <input name="judul" type="name" class="form-control" id="judul" placeholder="Judul">
                </div>

                <div class="form-group">
                   <label>Pengarang</label> 
                        <select class="form-control" name="kd_pengarang" id="pengarang">
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
                        <select class="form-control" name="kd_penerbit" id="penerbit">
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
                        <select class="form-control" name="kd_klasifikasi" id="klasifikasi">
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
                        <select class="form-control" name="kd_rak" id="kd_rak">
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
                  <input name="thn_terbit" type="text" class="form-control" id="thn_terbit" placeholder="Tahun Terbit">
                </div>

                 <div class="form-group">
                  <label >Bahasa</label>
                  <input name="bahasa" type="text" class="form-control" id="bahasa" placeholder="Bahasa">
                </div>

                <div class="form-group">
                  <label >Edisi</label>
                  <input name="edisi"  type="text" class="form-control" id="edisi" placeholder="Edisi">
                </div>

                <div class="form-group">
                  <label >ISBN</label>
                  <input name="isbn"  type="text" class="form-control" id="isbn" placeholder="ISBN">
                </div>

                <div class="form-group">
                  <label >Jumlah</label>
                  <input name="jumlah"  type="text" class="form-control" id="jumlah" placeholder="Jumlah">
                </div>

                <!--  <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div> -->

              <div class="box-footer">
                  <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>

            </form>
          </div>
          <!-- /.box -->
