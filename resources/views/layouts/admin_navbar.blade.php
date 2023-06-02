<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('users.getIndex')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('global/img/asset/mannuurulhudaa_logo.png')}}" alt="Logo">
        </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
        <li class="nav-item @yield('home-active')">
            <a class="nav-link" href="{{route('admin.getIndex')}}">
                <i class="bi bi-house-door-fill"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item @yield('daftar-active')">
        <a class="nav-link" href="{{route('admin.getUserIndex')}}">
            <i class="bi bi-pencil-square"></i>
            <span>User Account</span>
        </a>
    </li>
    <li class="nav-item @yield('info-active')">
        <a class="nav-link" href="{{route('admin.getSiswaIndex')}}">
            <i class="bi bi-info-square-fill"></i>
            <span>Siswa</span>
        </a>
    </li>
    <li class="nav-item @yield('info-active')">
        <a class="nav-link" href="{{route('pendaftaran.getIndex')}}">
            <i class="bi bi-info-square-fill"></i>
            <span>Pendaftaran</span>
        </a>
    </li>
    <li class="nav-item @yield('info-active')">
        <a class="nav-link" href="{{route('posts.getIndex')}}">
            <i class="bi bi-info-square-fill"></i>
            <span>Informasi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.getLogout')}}">
            <i class="bi bi-arrow-bar-left"></i>
            <span>Logout</span>
        </a>
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
        </button>
                    Admin Dashboard
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                                    <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{session('admin')}}<i class="fas fa-caret-down"></i></span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route('admin.getProfile')}}">
                        <i class="bi bi-person-circle"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.getLogout')}}">
                        <i class="bi bi-arrow-left-circle"></i>
                        Logout
                    </a>
                </div>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle">
                </button>
            </div>
        </ul>
    </nav>
    <!-- End of Topbar -->
    <div id="ajaxSpinnerContainer">
    </div>

