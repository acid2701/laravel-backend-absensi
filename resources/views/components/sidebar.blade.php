<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">E-KARYAWAN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PKU</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item">
                <a href="#" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link"><i class="fas fa-bicycle"></i>
                    <span>Absensi</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                    <span>Permission</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link"><i class="fas fa-plug"></i>
                    <span>Company</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="far fa-user"></i>
                    <span>Users</span></a>
            </li>

    </aside>
</div>
