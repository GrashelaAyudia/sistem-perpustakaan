<!-- Sidebar -->
<ul class="navbar-nav bg-pink sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpus</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ $active == 'book' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('buku.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Buku</span></a>
    </li>
    <li class="nav-item {{ $active == 'book-create' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('buku.create') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Tambah Buku</span></a>
    </li>
</ul>
<!-- End of Sidebar -->
