<h2>Data Jurusan</h2>
<a href="index.php?halaman=tambahjurusan" class="btn btn-primary">Tambah Data</a> <br><br>
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
						<th>Kode Jurusan</th>
						<th>Nama Jurusan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php $ambil=$koneksi->query("SELECT * FROM jurusan"); ?>
					<?php while ($pecah = $ambil->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah['id_jurusan']; ?></td>
						<td><?php echo $pecah['nama_jurusan']; ?></td>
						<td>
							<a href="index.php?halaman=editjurusan&id=<?php echo $pecah['id_jurusan']; ?>" class="btn btn-info">Edit</a> ||
							<a href="index.php?halaman=hapusjurusan&id=<?php echo $pecah['id_jurusan']; ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
					<?php $nomor++; ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

