<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-warehouse"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Saladin Aja</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('pemesanan')?>">
      <i class="fas fa-cart-plus"></i>
          <span>Data Pesanan</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
       <a class="nav-link" href="<?= base_url('pembayaran')?>">
          <i class="fas fa-coins"></i>
          <span>Data Pembayaran</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
       <a class="nav-link" href="<?= base_url('menu')?>">
          <i class="fas fa-book-open"></i>
          <span>Data Menu</span></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('bahan')?>">
          <i class="fas fa-lemon"></i>
          <span>Data Bahan</span></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('pegawai')?>">
        <i class="fas fa-users"></i>
          <span>Data Pegawai</span></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('kurir')?>">
      <i class="fas fa-box-open"></i>
          <span>Data Kurir</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          <!-- <?php if($this->session->userdata('name')) { ?>
              <li><div>Selamat Datang <?php echo $this->session->userdata('name') ?>
              </div></li>
          <?php } ?> -->

            <!-- Nav Item - Logout -->
            <li class="nav-item dropdown no-arrow">
            <a class="nav-link" href="<?= base_url('logout')?>"> 
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->