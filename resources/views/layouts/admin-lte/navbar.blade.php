<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('home')}}" target="_blank" class="nav-link">Home</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li>
            <span class="m-r-sm text-muted welcome-message">Hello, @if(isset(Auth::User()->name)){{Auth::User()->name}}@endif &nbsp;</span>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</nav>
