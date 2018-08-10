<h2>Data Pendaftaran</h2>

<a href="index.php?halaman=tambahdaftar" class="btn btn-primary hidden-print">Tambah Data</a> <br><br>

<div class="table-responsive">
	<table class="table table-bordered  table-striped"  >
		<thead>
			<tr >
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Sekolah</th>
				<th>Email</th>
				<th>Photo</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<!-- 	<th>Status</th> -->
				<th>Handphone</th>
				<th width="21%" class="hidden-print">Aksi</th>
			</tr>
		</thead>
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
					<!-- <td><?php echo $pecah['status_sekarang']; ?></td> -->
					<td><?php echo $pecah['nohp']; ?></td>
					<td class="hidden-print">
						<a href="index.php?halaman=editdaftar&id=<?php echo $pecah['id_pkl']; ?>" class="btn btn-info "><i class="fa fa-pencil"></i></a> ||
						<a href="index.php?halaman=hapusdaftar&id=<?php echo $pecah['id_pkl']; ?>" class="btn btn-danger "><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php $nomor++; ?>
			<?php } ?>
		</tbody>
	</table>
</div>

<a href="" onclick="window.print();" class="btn btn-default hidden-print" ><i class="fa fa-print"></i> Print</a>



