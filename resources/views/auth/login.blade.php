<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Bemo | Login</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <link rel="icon" href="{{ asset('files/favicon-16x16.png') }}" type="image/gif" sizes="16x16">
	<meta name="author" content="Bemo">

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="{{asset('color-admin/assets/css/facebook/app.min.css')}}" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->

	<!-- begin login-cover -->
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url({{asset('color-admin/assets/img/login-bg/login-bg-17.jpg')}})" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- end login-cover -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-v2" data-pageload-addclass="animated fadeIn">
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand">
					<span class="logo"></span> <b>Bemo</b> Admin
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- end brand -->
			<!-- begin login-content -->
			<div class="login-content">
                <form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
                    @csrf
					<div class="form-group m-b-20">
                        <input id="email" type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}" autocomplete="email" autofocus required />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-group m-b-20">
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="login-buttons">
						<button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
					</div>
					<div class="m-t-20">
						{{ __('Forgot Your Password?') }} <a href="{{ route('password.request') }}">Click here</a> to recover.
					</div>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
		<!-- end login-bg -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('color-admin/assets/js/app.min.js')}}"></script>
	<script src="{{asset('color-admin/assets/js/theme/facebook.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('color-admin/assets/js/demo/login-v2.demo.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>
