 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penerbit</h3>
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
                                <table class="table table-striped table-bordered table-hover" id="penerbit">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Penerbit</th>
                                            <th>Nama Penerbit</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php
                                    		$sql = mysql_query("SELECT * FROM penerbit");
                                    		$no = 1;

                                    		while ($tampil = mysql_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['kd_penerbit']; ?></td>
                                                <td><?php echo $tampil['nama_penerbit']; ?></td>
                                                <td><?php echo $tampil['alamat']; ?></td>
                                                <td><?php echo $tampil['telp']; ?></td>
                                                <td>
                                                    <a href="?page=penerbit&aksi=edit&id=<?php echo $tampil['kd_penerbit']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
                                                    <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=penerbit&aksi=hapus&id=<?php echo $tampil['kd_penerbit']; ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
                                                </td>
                                    	 	</tr>

                                    	 <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        </div>