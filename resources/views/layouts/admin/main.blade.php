<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>Bemo | @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="icon" href="{{ asset('files/favicon-16x16.png') }}" type="image/gif" sizes="16x16">
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
    @section('css')
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="{{asset('color-admin/assets/css/transparent/app.min.css')}}" rel="stylesheet" />
        <!-- ================== END BASE CSS STYLE ================== -->
    @show
</head>
<body>
	<!-- begin page-cover -->
	<div class="page-cover"></div>
	<!-- end page-cover -->

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">

        @include('layouts.admin.header')

		@include('layouts.admin.sidebar')

		@yield('content')

		@include('layouts.admin.footer')

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

    @section('js')
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{asset('color-admin/assets/js/app.min.js')}}"></script>
        <script src="{{asset('color-admin/assets/js/theme/transparent.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
    @show
</body>
</html>
