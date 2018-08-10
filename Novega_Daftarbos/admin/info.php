<h2>info berita</h2>
<a href="index.php?halaman=tambahinfo" class="btn btn-primary">Tambah Data</a> <br><br>
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
						<th>Id</th>
						<th>Judul</th>
						<th>Gambar</th>
						<th>Deskripsi</th>
						<th>Tanggal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php $ambil=$koneksi->query("SELECT * FROM info"); ?>
					<?php while ($pecah = $ambil->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $pecah['id_info']; ?></td>
							<td><?php echo $pecah['judul']; ?></td>
							<td>
								<img src="img/<?php echo $pecah['gambar']; ?>" width="100">
							</td>
							<td><?php echo $pecah['deskripsi']; ?></td>
							<td><?php echo $pecah['tgl']; ?></td>
							<td>
								<a href="index.php?halaman=editinfo&id=<?php echo $pecah['id_info']; ?>" class="btn btn-info">Edit</a> ||
								<a href="index.php?halaman=hapusinfo&id=<?php echo $pecah['id_info']; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php $nomor++; ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

