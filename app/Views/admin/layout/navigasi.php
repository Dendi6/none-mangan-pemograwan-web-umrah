<style>
    .bg-gradient-primary {
        background: #63a541;
    }
</style>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">NONE<sup>2020</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-percent"></i>
            <span>Promosi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kota'); ?>">
            <i class="fas fa-fw fa-city"></i>
            <span>Ongkir Perkota</span></a>
    </li>

    <!-- Nav Item - produk -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/produk'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Produk</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Transaksi
    </div>

    <!-- Nav Item - pembayaran -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pembayaran'); ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pembayaran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->