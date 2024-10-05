<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
    <img src="/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Hotaler</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info d-flex">
            @if (Auth::check())
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>    
                <a href="" class="d-block " style="margin-left: 10px">Đăng xuất</a>
            @else
          
            @endif
            
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
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-solid fa-hotel"></i>
                <p>
                    Rooms Type
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('roomtypes-add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add room types</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('roomtypes-list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List room types</p>
                        </a>
                    </li>                
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-bed"></i>
                    <p>
                        Rooms 
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('room-add') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add room </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('room-list') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List room </p>
                        </a>
                    </li>                
                </ul>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-solid fa-sun"></i>
                <p>
                    Amenity type
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('amenity_type-add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add amenity type </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('amenity_type-list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List amenity type</p>
                        </a>
                    </li>                
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-regular fa-sun"></i>
                <p>
                    Amenity
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('amenity-add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add amenity </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('amenity-list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List amenity </p>
                        </a>
                    </li>                
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-solid fa-people-group"></i>
                <p>
                    Customer
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('customer-list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer list </p>
                        </a>
                    </li>                
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-brands fa-first-order-alt"></i>
                <p>
                    Orders
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('order-list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Orders list </p>
                        </a>
                    </li>                
                </ul>
            </li>
            {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-solid fa-images"></i>
                <p>
                    Slider
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('slider-add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add slider </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('slider-list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List slider </p>
                        </a>
                    </li>                
                </ul>
            </li> --}}
        
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
