 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Petugas</h3>
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
                                            <th>Kode Petugas</th>
                                            <th>Nama Petugas</th>
                                            <th>JK</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>User Login</th>
                                            <th>Password Login</th>
                                            <th>status</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php
                                    		$sql = mysql_query("SELECT * FROM petugas");
                                    		$no = 1;

                                    		while ($tampil = mysql_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['kd_petugas']; ?></td>
                                                <td><?php echo $tampil['nama_petugas']; ?></td>
                                                <td><?php echo $tampil['jk']; ?></td>
                                                <td><?php echo $tampil['alamat']; ?></td>
                                                <td><?php echo $tampil['telp']; ?></td>
                                                <td><?php echo $tampil['user_login']; ?></td>
                                                <td><?php echo $tampil['pwd_login']; ?></td>
                                                <td><?php echo $tampil['stts']; ?></td>
                                                <td>
                                                    <a href="?page=petugas&aksi=edit&id=<?php echo $tampil['kd_petugas']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
                                                    <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=petugas&aksi=hapus&id=<?php echo $tampil['kd_petugas']; ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
                                                </td>
                                    	 	</tr>

                                    	 <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        </div>