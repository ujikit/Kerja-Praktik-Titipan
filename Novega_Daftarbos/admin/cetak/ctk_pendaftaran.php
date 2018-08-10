<?php 
include_once "../koneksi.php";

?>
<!-- <link href="styles_cetak.css" rel="stylesheet" type="text/css"> -->
<!--  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css"> -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../asset/css/style.css" rel="stylesheet" />
<h4>Laporan Pendaftaran</h4>
<body onLoad="window.print()">
<div class="table-responsive">
	<table class="table-list">
		
			<tr>
				<th bgcolor="#F5F5F5">No</th>
				<th bgcolor="#F5F5F5">NIM</th>
				<th bgcolor="#F5F5F5">Nama</th>
				<th bgcolor="#F5F5F5">Jenis Klamin</th>
				<th bgcolor="#F5F5F5">Sekolah</th>
				<th bgcolor="#F5F5F5">Email</th>
				<th bgcolor="#F5F5F5">Photo</th>
				<th bgcolor="#F5F5F5">Tempat Lahir</th>
				<th bgcolor="#F5F5F5">Tanggal Lahir</th>
				<th bgcolor="#F5F5F5">Alamat</th>
				<th bgcolor="#F5F5F5">Status</th>
				<th bgcolor="#F5F5F5">Handphone</th>
				<th bgcolor="#F5F5F5">Aksi</th>
			</tr>
		
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM pendaftaran"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah['nim']; ?></td>
					<td><?php echo $pecah['nama']; ?></td>
					<td><?php echo $pecah['jenis_kel']; ?></td>
					<td><?php echo $pecah['sekolah']; ?></td>
					<td><?php echo $pecah['email']; ?></td>
					<td>
						<img src="../admin/img/<?php echo $pecah['photo']; ?>" width="100">
					</td>
					<td><?php echo $pecah['tempat_lahir']; ?></td>
					<td><?php echo $pecah['tgl_lahir']; ?></td>
					<td><?php echo $pecah['alamat']; ?></td>
					<td><?php echo $pecah['status_sekarang']; ?></td>
					<td><?php echo $pecah['nohp']; ?></td>
				</tr>
				<?php $nomor++; ?>
			<?php } ?>
		</tbody>
	</table>
</div>