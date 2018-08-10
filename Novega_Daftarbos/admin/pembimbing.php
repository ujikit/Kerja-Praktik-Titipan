<h2>Data Pembimbing</h2>
<a href="index.php?halaman=tambahpembimbing" class="btn btn-primary">Tambah Data</a> <br><br>
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
						<th>Kode Pembimbing</th>
						<th>Nama Pembimbing</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php $ambil=$koneksi->query("SELECT * FROM pembimbing"); ?>
					<?php while ($pecah = $ambil->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah['id_pembimbing']; ?></td>
						<td><?php echo $pecah['nama_pembimbing']; ?></td>
						<td>
							<a href="index.php?halaman=editpembimbing&id=<?php echo $pecah['id_pembimbing']; ?>" class="btn btn-info">Edit</a> ||
							<a href="index.php?halaman=hapuspembimbing&id=<?php echo $pecah['id_pembimbing']; ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
					<?php $nomor++; ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

