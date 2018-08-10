<?php 
include 'atas.php';
?>
<?php
$per_hal=12;
$jumlah_record=mysql_query("SELECT COUNT(*) from barang");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<!-- potong -->

						<?php
      include 'config.php';
      $det=mysql_query("select * from barang where stok>=0 limit $start, $per_hal")or die(mysql_error());
      while($d=mysql_fetch_array($det)){
      ?>  
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $d['foto'] ?>" alt="" />
											<h2>Rp <?php echo rupiah($d['harga_jual'],0) ?></h2>
											<p><?php echo $d['nama'] ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rp<?php echo rupiah($d['harga_jual'],0) ?></h2>
												<p><?php echo $d['nama'] ?></p>
												<a href="beli.php?brg=<?php echo $d['id_barang'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Stok :<?php echo $d['stok'] ?>  <?php echo $d['satuan'] ?></a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Brand : <?php echo $d['merek'] ?> </a></li>
									</ul>
								</div>
							</div>
						</div>
<?php }; ?>
						
					</div><!--features_items-->
						<ul class="pagination">
							<?php 
							for($x=1;$x<=$halaman;$x++){
							?>
							<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
							<?php } ?>
						</ul>

<?php 
include 'bawah.php';
?>