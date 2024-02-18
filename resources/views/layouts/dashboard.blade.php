<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/styles/style.min.css') }}">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/waves/waves.min.css') }}">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/sweet-alert/sweetalert.css') }}">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/percircle/css/percircle.css') }}">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/chart/chartist/chartist.min.css') }}">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/fullcalendar/fullcalendar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>

	<!-- Color Picker -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/color-switcher/color-switcher.min.css') }}">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="{{ asset('/dashboard/assets/styles/all.min.css') }}">
</head>

<body>
	<div class="main-menu">
		<header class="header">
			<a href="{{ url('/') }}" class="logo" target="_blank">Bucklin</a>
			<button type="button" class="button-close fa fa-times js__menu_close"></button>
			<div class="user">
				<a href="#" class="avatar"><img src="{{ asset('/dashboard/assets/images/default.png') }}" alt="avatar"><span class="status online"></span></a>
				<h5 class="name"><a href="profile.html">{{ Auth::user()->name }}</a></h5>
				<h5 class="position">{{ Auth::user()->email }}</h5>
				<!-- /.name -->
				<div class="control-wrap js__drop_down">
					<i class="fa fa-caret-down js__drop_down_button"></i>
					<div class="control-list">
						<div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
						<div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>

						<div class="control-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Log out</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					</div>
					<!-- /.control-list -->
				</div>
				<!-- /.control-wrap -->
			</div>
			<!-- /.user -->
		</header>
		<!-- /.header -->
		<div class="content">

			<div class="navigation">
				<h5 class="title">Navigation</h5>
				<!-- /.title -->
				<ul class="menu js__accordion">
					<li class="current"><!--===== DASHBOARD =====-->
						<a class="waves-effect" href="{{ route('admin') }}"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
					</li>
					<li><!--===== SITE =====-->
						<a class="" href="{{ url('/') }}" target="_blank"><i class="menu-icon fa-solid fa-link"></i><span>Visit Site</span></a>
					</li>
					<li><!--===== USERS =====-->
						<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa-solid fa-user"></i><span>Users</span><span class="menu-arrow fa fa-angle-down"></span></a>
						<ul class="sub-menu js__content">
							<li><a href="{{ route('user') }}">View Users</a></li>
						</ul>
					</li>
					<li><!--===== CATEGORIES =====-->
						<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa-solid fa-tags"></i><span>Categories</span><span class="menu-arrow fa fa-angle-down"></span></a>
						<ul class="sub-menu js__content">
							<li><a href="{{ url('/category') }}">Add Category</a></li>
							<li><a href="{{ route('category.view') }}">View Categories</a></li>
						</ul>
					</li>
					<li><!--===== POSTS =====-->
						<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa-solid fa-square-rss"></i><span>Posts</span><span class="menu-arrow fa fa-angle-down"></span></a>
						<ul class="sub-menu js__content">
							<li><a href="{{ url('/post') }}">Add Post</a></li>
							<li><a href="{{ route('post.view') }}">View Posts</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navigation -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.main-menu -->

	<div class="fixed-navbar">
		<div class="pull-left">
			<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
			<!-- /.page-title -->
		</div>
		<!-- /.pull-left -->
		<div class="pull-right">
			<!-- /.ico-item -->
			<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
			<!-- /.ico-item fa fa-fa-arrows-alt -->
			<!-- /.ico-item -->
			<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
			<a href="{{ route('logout') }}" class="ico-item fa fa-power-off" onclick="event.preventDefault();
			document.getElementById('logout-form').submit();"></a>
		</div>
		<!-- /.pull-right -->
	</div>
	<!-- /.fixed-navbar -->



	<div id="message-popup" class="notice-popup js__toggle" data-space="75">
		<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
		<!-- /.popup-title -->
		<div class="content">
			<ul class="notice-list">
				<li>
					<a href="#">
						<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
						<span class="name">John Doe</span>
						<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
						<span class="time">10 min</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
						<span class="name">Harry Halen</span>
						<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
						<span class="time">15 min</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
						<span class="name">Thomas Taylor</span>
						<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
						<span class="time">30 min</span>
					</a>
				</li>
			</ul>
			<!-- /.notice-list -->
			<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
		</div>
		<!-- /.content -->
	</div>
	<!-- /#message-popup -->

	<div id="wrapper">
        <div class="main-content">
            @yield('content')
        </div>
    </div>
	
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('/dashboard/assets/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/scripts/modernizr.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/nprogress/nprogress.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/waves/waves.min.js') }}"></script>
	<!-- Full Screen Plugin -->
	<script src="{{ asset('/dashboard/assets/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

	<!-- Percent Circle -->
	<script src="{{ asset('/dashboard/assets/plugin/percircle/js/percircle.js') }}"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="{{ asset('/dashboard/assets/plugin/chart/chartist/chartist.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/scripts/chart.chartist.init.min.js') }}"></script>

	<!-- FullCalendar -->
	<script src="{{ asset('/dashboard/assets/plugin/moment/moment.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/scripts/fullcalendar.init.js') }}"></script>

	<script src="{{ asset('/dashboard/assets/scripts/main.min.js') }}"></script>
	<script src="{{ asset('/dashboard/assets/color-switcher/color-switcher.min.js') }}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@yield('footer_script')

</body>
</html>