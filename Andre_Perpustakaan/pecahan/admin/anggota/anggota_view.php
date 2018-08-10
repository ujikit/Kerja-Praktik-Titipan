 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            <?php 
                if(isset($_GET['stts'])){
                    if ($_GET['stts']=='1') {
                    echo'<div class="alert alert-success">Data Berhasil Di Update !</div>';
                    }else if ($_GET['stts']=='2')  {
                    echo'<div class="alert alert-danger">Data Gagal Di Update !</div>';
                    }else if ($_GET['stts']=='3')  {
                    echo'<div class="alert alert-success">Data Berhasil Dihapus!</div>';
                    }else if ($_GET['stts']=='4')  {
                    echo'<div class="alert alert-danger">Data Gagal Dihapus!</div>';
                    }

                }
            ?>
                                   <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="petugas">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Anggota</th>
                                            <th>Nama Anggota</th>
                                            <th>JK</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Tgl Daftar</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php
                                    		$sql = mysql_query("SELECT * FROM anggota");
                                    		$no = 1;

                                    		while ($tampil = mysql_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['kd_anggota']; ?></td>
                                                <td><?php echo $tampil['nama_anggota']; ?></td>
                                                <td><?php echo $tampil['jk']; ?></td>
                                                <td><?php echo $tampil['alamat']; ?></td>
                                                <td><?php echo $tampil['no_telp']; ?></td>
                                                <td><?php echo $tampil['stts']; ?></td>
                                                <td><?php echo $tampil['keterangan']; ?></td>
                                                <td><?php echo $tampil['tgl_daftar']; ?></td>
                                                <td><?php echo $tampil['username']; ?></td>
                                                <td><?php echo $tampil['password']; ?></td>
                                                <td>
                                                    <a href="?page=anggota&aksi=edit&id=<?php echo $tampil['kd_anggota']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
                                                    <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=anggota&aksi=hapus&id=<?php echo $tampil['kd_anggota']; ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
                                                </td>
                                    	 	</tr>

                                    	 <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        </div>