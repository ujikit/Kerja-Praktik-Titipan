 <div class="box"> 
            <div class="box-header">
              <h3 class="box-title">Data Buku</h3>
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
                                <table class="table table-striped table-bordered table-hover" id="buku">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Klasifikasi</th>
                                            <th>Rak Buku</th>
                                            <th>Tahun Terbit</th>
                                            <th>Bahasa</th>
                                            <th>Edisi</th>
                                            <th>ISBN</th>
                                            <th>Jumlah</th>
                                             <?php 
                                              if ($_SESSION['akses']=='petugas') {
                                              ?>
                                            <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php
                                    		$sql = mysql_query("SELECT * FROM buku");
                                    		$no = 1;

                                    		while ($tampil = mysql_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['kd_buku']; ?></td>
                                                <td><?php echo $tampil['judul']; ?></td>
                                                <td><?php echo $tampil['kd_pengarang']; ?></td>
                                                <td><?php echo $tampil['kd_penerbit']; ?></td>
                                                <td><?php echo $tampil['kd_klasifikasi']; ?></td>
                                                <td><?php echo $tampil['kd_rak']; ?></td>
                                                <td><?php echo $tampil['thn_terbit']; ?></td>
                                                <td><?php echo $tampil['bahasa']; ?></td>
                                                <td><?php echo $tampil['edisi']; ?></td>
                                                <td><?php echo $tampil['isbn']; ?></td>
                                                <td><?php echo $tampil['jumlah']; ?></td>
                                                <?php 
                                                  if ($_SESSION['akses']=='petugas') {
                                                  ?>
                                                <td>
                                                    <a href="?page=buku&aksi=edit&id=<?php echo $tampil['kd_buku']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
                                                    <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=buku&aksi=hapus&id=<?php echo $tampil['kd_buku']; ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
                                                </td>
                                                <?php } ?>
                                    	 	</tr>

                                    	 <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        </div>