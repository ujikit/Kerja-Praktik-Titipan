      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">

        <li class="header">Master</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="pesanan.php?stts=pembayaran"><i class="fa fa-dot-circle-o"></i> <span>Pemnjaman Baru</span></a></li>

        <!-- akses petugas dan anggota -->
          <?php
          if ($_SESSION['akses']=='petugas' OR $_SESSION['akses']=='anggota') {
          ?>
        <li class="treeview">
          <a href="#"><i class="fa fa-file"></i> <span>BUKU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>


          <ul class="treeview-menu">
            <!-- akses petugas -->
            <?php
            if ($_SESSION['akses']=='petugas') {
            ?>
            <li><a href="?page=buku">Input Buku</a></li>
            <?php } ?>
            <!-- akhir akses petugas -->
            <li><a href="?page=buku&aksi=view">Lihat Data Buku</a></li>
          </ul>
        </li>
        <?php } ?>
        <!-- akses petugas dan anggota -->

        <!-- akses petugas -->
          <?php
          if ($_SESSION['akses']=='petugas') {
          ?>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Data Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=anggota">input Anggota</a></li>
            <li><a href="?page=anggota&aksi=view">Data Anggota</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Data Petugas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=petugas">input Petugas</a></li>
            <li><a href="?page=petugas&aksi=view">Data Petugas</a></li>
          </ul>
        </li>

         <li class="header">Master Buku</li>

         <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Data Pengarang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=pengarang">input Pengarang</a></li>
            <li><a href="?page=pengarang&aksi=view">Data Pengarang</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Data penerbit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=penerbit">input Penerbit</a></li>
            <li><a href="?page=penerbit&aksi=view" >Data penerbit</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Data Klasifikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=klasifikasi">input Klasifikasi</a></li>
            <li><a href="?page=klasifikasi&aksi=view" >Data klasifikasi</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Data Rak Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=rak_buku">input Rak Buku</a></li>
            <li><a href="?page=rak_buku&aksi=view" >Data Rak Buku</a></li>
          </ul>
        </li>

        <li class="header">Transaksi</li>

        <li><a href="?page=peminjaman"><i class="fa fa-home"></i> <span>Peminjaman Buku</span></a></li>
        <li><a href="?page=pengembalian"><i class="fa fa-home"></i> <span>Pengembalian Buku</span></a></li>
        <li><a href="?page=denda"><i class="fa fa-home"></i> <span>Denda</span></a></li>

        <li class="header">Laporan</li>

        <li><a href="index.php"><i class="fa fa-home"></i> <span>Laporan Peminjaman</span></a></li>
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Laporan Pengembalian</span></a></li>
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Laporan Denda</span></a></li>
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Laporan Anggota</span></a></li>
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Laporan Buku</span></a></li>
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Laporan Buku Tamu</span></a></li>
        <?php } ?>
        <!-- akhir akses petugas -->

      </ul>
      <!-- /.sidebar-menu -->
