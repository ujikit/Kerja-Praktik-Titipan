<h2>Data Disposisi</h2>
<a href="index.php?halaman=tambahdisposisi" class="btn btn-primary">Tambah Data</a> <br><br>
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
						<th>Nama Jurusan</th>
						<th>Nama Bidang</th>
						<th>Nama Pembimbing</th>
						<th>Nama Pembimbing Sekolah</th>
						<th>NoHP</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php $ambil=$koneksi->query("SELECT * FROM disposisi JOIN bidang JOIN pembimbing JOIN jurusan WHERE disposisi.id_bidang=bidang.id_bidang AND disposisi.id_pembimbing=pembimbing.id_pembimbing AND disposisi.id_jurusan=jurusan.id_jurusan order by id_disposisi ASC"); ?>
					<?php while ($pecah = $ambil->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah['nama_jurusan']; ?></td>
						<td><?php echo $pecah['nama_bidang']; ?></td>
						<td><?php echo $pecah['nama_pembimbing']; ?></td>
						<td><?php echo $pecah['nmpem_sekolah']; ?></td>
						<td><?php echo $pecah['nohp']; ?></td>
						<td>
							<a href="index.php?halaman=editdisposisi&id=<?php echo $pecah['id_disposisi']; ?>" class="btn btn-info">Edit</a> ||
							<a href="index.php?halaman=hapusdisposisi&id=<?php echo $pecah['id_disposisi']; ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
					<?php $nomor++; ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

