<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url();?>Dashboard/view_admin" class="brand-link">
        <img src="<?= base_url();?>assets/logo/logoku.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SSCASN-KKP | Jatim</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url();?>assets/admin_lte/dist/img/user.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url();?>Dashboard/view_admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p class="text">Dashboard</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?=base_url();?>Peserta/view_admin" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>
                            Data Peserta
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                    <!-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url();?>Peserta/view_admin" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Peserta Daftar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url();?>Peserta/view_admin_peserta_perpanjang" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Peserta Perpanjang</p>
                            </a>
                        </li>
                    </ul> -->
                </li>
                <!-- <li class="nav-item">
                    <a href="<?=base_url();?>Perusahaan/view_admin" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Data Perusahaan</p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>