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
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
          </li>
          {{-- Transaksi --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa fa-money-bill nav-icon"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/transaksi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Barang --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>
                Produk
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/produk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Pegawai --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Pegawai</p>
            </a>
          </li>
          {{-- Pelanggan --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          {{-- Laporan --}}
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran Lainnya</p>
                </a>
              </li><li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  {{-- Berisi hasil laporan keseluruhan dari pengeluaran dan pemasukan keuangan --}}
                  <p>Keuangan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>