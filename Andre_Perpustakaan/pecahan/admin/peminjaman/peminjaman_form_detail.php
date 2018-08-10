<div class="panel-body">
  <div class="table-responsive">
    <?php
      include_once "../../config.php";
      $newid = $_GET['newid'];
      $kd_anggota = $_GET['kd_anggota'];
      $today = $_GET['today'];
      $nexday = $_GET['nexday'];

      $sql = mysql_query("SELECT * FROM anggota WHERE kd_anggota=".$kd_anggota."");
      while ($tampil = mysql_fetch_array($sql)) {
      $kd_anggota =  $tampil['kd_anggota'];
      // echo $newid;
      ?>
      <table class='table table-striped table-bordered table-hover'>
      <thead>
      </thead>
      <tbody>

      <!-- <tr>
      <td>Kode Peminjaman</td>
      <input type='hidden' name='kd_peminjaman' value='$newid' ></td>
      <td><?php echo $newid ?></td>
      </tr> -->

      <tr>
      <td width='20%'>Kode Anggota</td>
      <input type='hidden' name='kd_anggota' value='<?php echo $tampil["kd_anggota"] ?>' >
      <td><?php echo $tampil['kd_anggota'] ?></td>
      </tr>

      <tr>
      <td>Nama Anggota</td>
      <td><?php echo $tampil['nama_anggota'] ?></td>
      </tr>

      <tr>
      <td>Tanggal Pinjam</td>
      <td><Input name='tgl_pinjam' type='text' id='tanggalSekarang' value='<?php echo $today ?>'readonly></td>
      </tr>

      <tr>
      <td>Tanggal Harus Kembali </td>
      <td><Input name='tgl_harus_kembali' type='text' value='<?php echo $nexday ?>' readonly></td>
      </tr>

      <tr>
      <td></td>
      <td>
        <!-- <a  id="button-load-detail-peminjaman-form" href="detailPeminjamanForm('<?php echo $newid ?>','<?php echo $tampil['kd_anggota'] ?>','<?php echo $today ?>','<?php echo $nexday ?>')" type="button" class="btn btn-success">Lanjutkan Peminjamanzs</a> -->
        <a  id="button-load-detail-peminjaman-form" type="button" class="btn btn-success">Lanjutkan Peminjamanzs</a>
      </tr>

      </tbody>
      </table>
      <?php
      }
     ?>
</div>
</div>
</div>
<div class="box-body">
<div class="box-footer">

</div>
</div>
<script type="text/javascript" src="../plugins/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Event Ajax -->
<script type="text/javascript">
  $('#button-load-detail-peminjaman-form').on('click', function(){
    $('#halaman-load-peminjaman-form').load('peminjaman/detail_peminjaman_form.php?kd_peminjaman=<?php echo $newid ?>&kd_anggota=<?php echo $kd_anggota ?>&tgl_pinjam=<?php echo $today ?>&tgl_harus_kembali=<?php echo $nexday ?>');
  })
</script>
