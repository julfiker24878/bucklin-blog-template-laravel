<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Bucklin - Login</title>
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/styles/style.min.css') }}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/waves/waves.min.css') }}">

</head>

<body>

<div id="single-wrapper">
	<form method="POST" action="{{ route('login') }}" class="frm-single">@csrf
		<div class="inside">
			<div class="title"><strong>Bucklin</strong>Admin</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>

			<!-- /.frm-title -->
			<div class="frm-input"><input type="email" placeholder="Email" class="frm-inp @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><i class="fa fa-user frm-ico"></i>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            </div>

			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" placeholder="Password" class="frm-inp @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><i class="fa fa-lock frm-ico"></i>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            </div>

			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme" name="remember"><label for="rememberme" {{ old('remember') ? 'checked' : '' }}>Remember me</label></div>
					<!-- /.checkbox -->
				</div>
				<!-- /.pull-left -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
					<div class="txt-login-with txt-center">or login with</div>
					<!-- /.txt-login-with -->
				</div>
				<!-- /.col-sm-12 -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
				<!-- /.col-sm-6 -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>
				<!-- /.col-sm-6 -->
			</div>
			<!-- /.row -->
			<a href="{{ url('/register') }}" class="a-link"><i class="fa fa-key"></i>New to Bucklin? Register.</a>
			<div class="frm-footer">Bucklin © 2022.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	
	<script src="{{ asset('/dashboard/assets/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/scripts/modernizr.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/nprogress/nprogress.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/waves/waves.min.js') }}"></script>

	<script src="{{ asset('/dashboard/assets/scripts/main.min.js') }}"></script>
</body>
</html>