<!DOCTYPE HTML5>
<html>
    <head>
        @if(isset(displayGeneralSettings()->google_analytics))
            <!-- Google Analytics -->
            {!!displayGeneralSettings()->google_analytics!!}
        @endif

        @if(isset(displayGeneralSettings()->facebook_pixel))
            <!-- Facebook Pixel -->
            {!!displayGeneralSettings()->facebook_pixel!!}
        @endif
        <!-- METAS -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Bemo">

        @if(displayGeneralSettings()->show_noindex == true)
        <meta name="robots" content="noindex" />
        @endif

        @yield('meta_description')

        <!-- TITILE -->
        <title>@yield('title')</title>

        <link rel="icon" href="{{ asset('files/favicon-16x16.png') }}" type="image/gif" sizes="16x16">

        <link rel="preload" href="{{ asset('css/style.css')}}" as="style">
        <link rel="preload" href="{{ asset('startbootstrap/vendor/jquery/jquery.min.js')}}" as="script">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('startbootstrap/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('startbootstrap/css/full-width-pics.css')}}" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('admin_lte/plugins/font-awesome/css/font-awesome.css')}}">

        <link href="{{ asset('css/style.css')}}" rel="stylesheet">

        <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

        @show
        @yield('layouts.style')

    </head>

    <body>
        @include('layouts.menu')

        @yield('content')

        @include('layouts.footer')

        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('startbootstrap/vendor/jquery/jquery-3.5.0.min.js')}}"></script>
        <script src="{{ asset('startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script>

        // ===== Scroll to Top ====
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(200);    // Fade in the arrow
                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }
            });
            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 500);
            });
        </script>
        @show
        @yield('scripts')
    </body>
</html>
