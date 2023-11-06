<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-center" id="logo">
            <a href="index.html" class="text-nowrap logo-img">
                <img src="<?php echo base_url('modernize-bootstrap'); ?>/dist/images/logos/penjualan.png" class="dark-logo" width="120" alt="" />
                <img src="<?php echo base_url('modernize-bootstrap'); ?>/dist/images/logos/penjualan.png" class="light-logo" width="120" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-10"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-home"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-category-2"></i>
                        </span>
                        <span class="hide-menu">Data Master</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/produk" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-users"></i>
                                </div>
                                <span class="hide-menu">Produk</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a href="/pengiriman" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-users"></i>
                                </div>
                                <span class="hide-menu">Pengiriman</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/transaksi" aria-expanded="false">
                        <span>
                            <i class="ti ti-package-import"></i>
                        </span>
                        <span class="hide-menu">Transaksi</span>
                    </a>
                </li>
                <!-- <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Laporan</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/transaksi" aria-expanded="false">
                        <span>
                            <i class="ti ti-package-import"></i>
                        </span>
                        <span class="hide-menu">Transaksi</span>
                    </a>
                </li> -->
            </ul>
            <div>
                <a href="/auth/logout" class="btn btn-outline-primary w-100" id="logoutButton">
                    Logout
                </a>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>