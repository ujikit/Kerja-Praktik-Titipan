<h2>Data Bidang</h2>
<a href="index.php?halaman=tambahbidang" class="btn btn-primary">Tambah Data</a> <br><br>
<div class="panel panel-default">
	<div class="panel-heading">
		Advanced Tables
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped" id="datatables">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Bidang</th>
						<th>Nama Bidang</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php $ambil=$koneksi->query("SELECT * FROM bidang"); ?>
					<?php while ($pecah = $ambil->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah['id_bidang']; ?></td>
						<td><?php echo $pecah['nama_bidang']; ?></td>
						<td>
							<a href="index.php?halaman=editbidang&id=<?php echo $pecah['id_bidang']; ?>" class="btn btn-info">Edit</a> ||
							<a href="index.php?halaman=hapusbidang&id=<?php echo $pecah['id_bidang']; ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
					<?php $nomor++; ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

