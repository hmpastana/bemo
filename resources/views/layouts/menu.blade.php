<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolled">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div id="logo"><img src="{{ asset(displayGeneralSettings()->logo_image) }}" width="167" height="100" alt="Site logo" /></div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach(mainMenuContent() as $menu_ind => $menu_array)
                    <li class="nav-item @if(Route::currentRouteName() == $menu_array->menu_link) active  @endif">
                        <a class="nav-link" href="{{ route($menu_array->menu_link) }}">{{$menu_array->menu_name}}
                            <span class="sr-only">(current)</span>@if($menu_array->menu_link == 'admin-home') <i class="nav-icon fa fa-gears"></i> @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
