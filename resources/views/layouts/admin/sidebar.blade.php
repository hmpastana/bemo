<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{asset('color-admin/assets/img/user/user-13.jpg')}}" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>{{ Auth::user()->name }}
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </a>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav"><li class="nav-header">Navegação</li>
            <li class='@if(Route::currentRouteName() == 'admin-home') active @endif'><a href="{{ route('admin-home') }}">Home</a></li>
            <li class='@if(Route::currentRouteName() == 'admin-contact-us') active @endif'><a href="{{ route('admin-contact-us') }}">Contact Us</a></li>
            <li class='@if(Route::currentRouteName() == 'admin-general-settings') active @endif'><a href="{{ route('admin-general-settings') }}">General Settings</a></li>
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
