<?php
session_start();
$kd_peminjaman      = $_GET["kd_peminjaman"];
$kd_anggota         = $_GET["kd_anggota"];
$tgl_pinjam         = $_GET["tgl_pinjam"];
$tgl_harus_kembali  = $_GET["tgl_harus_kembali"];
?>

<section class="content">
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
      <div class="box-header with-border">
        <h3 class="box-title">Halaman Peminjaman <div id="clock"></div></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <div class="form-horizontal style-form" style="margin-top: 20px;">
        <!-- <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Kode Peminjam</label>
            <div class="col-sm-5">
                <input name="no_pinjam" type="text" id="kd_peminjam" class="form-control"  autofocus="on" readonly="readonly" value="<?php echo $kd_peminjaman ?>">
            </div>
        </div> -->
        <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Kode Anggota</label>
            <div class="col-sm-5">
                <input name="kd_anggota" value="<?php echo $kd_anggota ?>" type="text" id="kd_anggota" class="form-control" placeholder="Ex : 00123" readonly/>
            </div>
        </div><hr size="10px">

        <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Kode Buku</label>
            <div class="col-sm-5">
                <input name="kd_buku" type="text" class="form-control" placeholder="Buku" id='kd_buku' autocomplete="on" />
            </div>
        </div>
        <div id="detail-buku">
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Judul</label>
              <div class="col-sm-5">
                  <input name="judul" class="form-control" id="judul_buku" type="text" placeholder="judul" value="<?php echo "-" ?>" readonly />
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">ISBN</label>
              <div class="col-sm-5">
                  <input name="isbn" class="form-control" id="isbn" type="text" placeholder="ISBN" value="<?php echo "-" ?>" readonly />
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
              <div class="col-sm-5">
                  <input name="jumlah" class="form-control" id="jumlah_buku" type="text" placeholder="-" readonly/>
              </div>
              <div class="col-sm-5">
                  <input id="button-tambah-buku" type="submit" value="tambah" name="tambah" class="btn btn-sm btn-primary disabled" />&nbsp;
              </div>
          </div>
        </div>
    </div>
    <hr size="10px">
</div>
</div>
<div class="panel-body">
  <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="tampil-troli-buku">
          <thead>
              <tr>
                  <!-- <th>No</th> -->
                  <th>Kode Buku</th>
                  <th>Kode Anggota</th>
                  <th>Judul</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody id="load-tabel-troli">
              <tr>
              </tr>
          </tbody>
      </table>
  </div>
  <div class="form-group">
    <div class="row-sm-5">
        <input id="button-selesai-input-buku" type="submit" value="selesai" class="btn btn-sm btn-primary" />&nbsp;
    </div>
</div>
</div>

<script type="text/javascript" src="../plugins/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../plugins/jQueryUI/jquery-ui.min.js"></script>
<script type="text/javascript" src="../plugins/jQueryDataTables/jquery.dataTables.min.js"></script>
<!-- Event Ajax -->
<script type="text/javascript">
  $(document).ready(function(){
    // Untuk enter kd_buku ajax
    $('#kd_buku').bind("enterKey",function(e){
      var kd_buku = $('#kd_buku').val()
      $('#detail-buku').load('peminjaman/event_cari.php?kd_buku='+kd_buku)
    });
    $('#kd_buku').keyup(function(e){
    if(e.keyCode == 13){
      $(this).trigger("enterKey");
    }
    });
    // Button selesai
    $('#button-selesai-input-buku').on('click', function(){
      var dataTroli = $('#load-tabel-troli').html()
      var dataTroli = dataTroli.match(/input\svalue="\S+\s/gi)
      var dataTroli = JSON.stringify(dataTroli)
      var dataTroli = dataTroli.replace(/[^a-z0-9,|]/gi, '')
      var dataTroli = dataTroli.replace(/inputvalue/gi, '')
      // window.open('Delivery_form.php?cnno=".$cnno."&copies=".$nocopy."', '_blank')
      alert(dataTroli)
      return false;
      window.open('peminjaman/proses_peminjaman_form.php?dataTroli='+dataTroli+'&kd_petugas=<?php echo $_SESSION['kode']; ?>&tgl_pinjam=<?php echo $tgl_pinjam ?>&tgl_harus_kembali=<?php echo $tgl_harus_kembali ?>', '_blank')
    })
  })
</script>
