  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('AdminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">XiXiXi Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">YaTod</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-header">Home</li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="fa-solid fa-house nav-icon"></i>
                <p>Dashboard</p>
            </a>
          </li>
          {{-- Transaksi --}}
          <li class="nav-header">Transaksi</li>
          <li class="nav-item">
            <a href="/transaksipenjualan" class="nav-link">
              <i class="fa-solid fa-right-from-bracket nav-icon"></i>
              <p>Penjualan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/transaksipembelian" class="nav-link">
              <i class="fas fa-right-to-bracket nav-icon"></i>
              <p>Pembelian</p>
            </a>
          </li>
          {{-- Barang --}}
          <li class="nav-header">Produk</li>
          <li class="nav-item">
            <a href="/produk" class="nav-link">
              <i class="fa-solid fa-cubes nav-icon"></i>
              <p>Daftar Produk</p>
            </a>
          </li>
          {{-- Pengguna --}}
          <li class="nav-header">Pengguna</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user-tie nav-icon"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user nav-icon"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          {{-- Laporan --}}
          <li class="nav-header">Laporan</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-chart-line nav-icon"></i>
              <p>Penjualan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-cart-arrow-down nav-icon"></i>
              <p>Pembelian</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-comment-dollar nav-icon"></i>
              <p>Pengeluaran Lainnya</p>
            </a>
          </li><li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-sack-dollar nav-icon"></i>
              {{-- Berisi hasil laporan keseluruhan dari pengeluaran dan pemasukan keuangan --}}
              <p>Keuangan</p>
            </a>
          </li>
          <li class="nav-header">Others</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Prediksi Stok</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>