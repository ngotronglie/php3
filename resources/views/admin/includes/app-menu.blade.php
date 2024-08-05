<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('/theme/admin/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/theme/admin/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('/theme/admin/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/theme/admin/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    {{-- <a class="nav-link menu-link" href="{{ route('admin.categories.list') }}" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards"> <!-- đang làm -->
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Danh mục</span>
                    </a> --}}
                    <a class="nav-link menu-link" href="{{ route('admin.users.list') }}"><i
                            class="ri-shield-user-fill"></i>Quan li
                        tai khoan</a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    {{-- <a class="nav-link menu-link" href="{{ route('admin.categories.list') }}" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards"> <!-- đang làm -->
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Danh mục</span>
                    </a> --}}
                    <a class="nav-link menu-link" href="{{ route('admin.categories.list') }}"><i
                            class="ri-stack-fill"></i>Danh muc</a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    {{-- <a class="nav-link menu-link" href="{{ route('admin.categories.list') }}" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards"> <!-- đang làm -->
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Danh mục</span>
                    </a> --}}
                    <a class="nav-link menu-link" href="{{ route('admin.products.list') }}"><i
                            class="ri-product-hunt-fill"></i>San
                        pham</a>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    {{-- <a class="nav-link menu-link" href="{{ route('admin.categories.list') }}" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards"> <!-- đang làm -->
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Danh mục</span>
                    </a> --}}
                    <a class="nav-link menu-link" href="{{ route('admin.banners.list') }}"><i
                            class="bx bx-copy-alt"></i>Banner</a>
                </li> <!-- end Dashboard Menu -->



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
