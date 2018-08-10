<?php
include_once "../../config.php";
$kd_buku = $_GET['kd_buku'];
$sql = mysql_query("SELECT * FROM buku WHERE kd_buku='$kd_buku'");
$tampil = mysql_fetch_array($sql);
if ($tampil) {
?>
<!-- /.box-header -->
<!-- form start -->
  <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Judul</label>
      <div class="col-sm-5">
          <input name="judul" class="form-control" id="judul_buku" type="text" placeholder="judul" value="<?php echo $tampil['judul'] ?>" readonly />
      </div>
  </div>
  <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">ISBN</label>
      <div class="col-sm-5">
          <input name="isbn" class="form-control" id="isbn" type="text" placeholder="ISBN" value="<?php echo $tampil['isbn'] ?>" readonly />
      </div>
  </div>
  <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
      <div class="col-sm-5">
          <input name="jumlah" class="form-control" id="jumlah_buku" type="text" placeholder="Jumlah" />
      </div>
      <div class="col-sm-5">
          <input id="button-tambah-buku" type="submit" value="tambah" name="tambah" class="btn btn-sm btn-primary" />&nbsp;
      </div>
  </div>
<?php
}
else {
  echo "<b>Pencarian Tidak ditemukan</b>";
}
?>
<!-- <div id="event-tambah-buku">

</div> -->
<script type="text/javascript">
  $(document).ready(function(){
    var arr = []
    var no=0;
    $('#button-tambah-buku').on('click', function(e){
      e.preventDefault()
      no++
      var kd_peminjam   = $('#kd_peminjam').val()
      var kd_anggota    = $('#kd_anggota').val()
      var kd_buku       = $('#kd_buku').val()
      var judul_buku    = $('#judul_buku').val()
      var jumlah_buku   = $('#jumlah_buku').val()
      // $('tbody tr:last').after('<tr id="tr-'+no+'"><td>'+no+'.</td><td>'+kd_buku+'</td><td>'+judul_buku+'</td><td>'+jumlah_buku+'</td><td><a id="button-hapus-troli-buku" value="'+no+'" type="button" class="btn btn-danger btn-xs" href="javascript:hapusArrayTroliPeminjamanBuku('+no+')" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td><tr>')
      $('tbody tr:last').after('<tr id="tr-'+no+'"><td>'+kd_buku+'</td><td>'+kd_anggota+'</td><td>'+judul_buku+'</td><td>'+jumlah_buku+'</td><td><a id="button-hapus-troli-buku" value="'+no+'" type="button" class="btn btn-danger btn-xs" href="javascript:hapusArrayTroliPeminjamanBuku('+no+')" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td><tr><input type="hidden" value="'+kd_buku+'|'+jumlah_buku+'|'+kd_anggota+'">')
    })
    $(document).on('click', '#button-hapus-troli-buku', function(){
      var hapusTroliBuku = $(this).attr('value');
      $("#tr-"+hapusTroliBuku).remove();
    })
  })
</script>
