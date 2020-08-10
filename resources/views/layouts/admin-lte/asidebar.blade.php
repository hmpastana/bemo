<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin-home') }}" class="brand-link">
        <img src="{{ asset('admin_lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BeMo Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block">@if(isset(Auth::User()->name)){{Auth::User()->name}} @endif</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin-home') }}" class="nav-link">
                        <i class="nav-icon fa fa-laptop"></i>
                        <p>Index</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-contact-us') }}" class="nav-link">
                        <i class="nav-icon fa fa-laptop"></i>
                        <p>Contact Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-general-settings') }}" class="nav-link">
                        <i class="nav-icon fa fa-laptop"></i>
                        <p>General Settings</p>
                    </a>
                </li>
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link" class="active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Customer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('insert_customer') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Insert</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('list_customer') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
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