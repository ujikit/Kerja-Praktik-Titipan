<?php
session_start();
include_once "koneksi.php";
$nomor=1;
$judul = $_GET['judul'];
?>
<div class="row" style="margin-top:20px;">
<?php
	$tampil = mysqli_query($koneksi, "SELECT * FROM info WHERE judul REGEXP '".$judul."' ");
	$num_rows = mysqli_num_rows($tampil);
	if ($num_rows > 0) {
		while($row=mysqli_fetch_array($tampil)){
	?>

			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" style="background:transparant; margin-bottom:20px;">
					<img src="admin/img/Desert.jpg" alt="...">
					<div class="caption">
						<h3><a href="infoberita_artikel.php"><?php limit_words($row['judul'], 28); ?></a></h3>
						<p><?php limit_words($row['deskripsi'], 37); ?></p>
					</div>
				</div>
			</div>

		<!-- <p>
			<a href="tes.html"><?php echo $row['judul']; ?></a>
			<img src="admin/img/<?php echo $row['gambar']; ?>" width="320x320">
			<h5><?php echo $row['deskripsi']; ?></h5>
		</p>
		<p class="date-footer"><?php echo $row['tgl']; ?></p> -->
	<?php
	}
	}
	else {
	?>
</div>
	<center>
		<h2>Maaf data yang anda cari tidak ditemukan :)</h2>
	</center>
	<?php
	}

function limit_words($x, $length){
	if(strlen($x)<=$length) {
		echo $x;
	}
	else {
		$y=substr($x,0,$length) . '...';
		echo $y;
	}
}
?>
